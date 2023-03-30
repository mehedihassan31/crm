<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\API\CustomersCheck;
use App\Http\Requests\API\StoreCustomerPostRequest;
use App\Http\Requests\API\UserCheckRequest;
use App\Http\Requests\API\UpdateRequest;
use Illuminate\Http\Request;
use Config;

class LoginCheckController extends Controller
{
    public $signature = "EasyTrax World";
    // protected $accessToken;

    // public function __construct(){
    //     $this->accessToken = Config::get('api-token.apiToken.access-token');
    // }

    public function index()
    {
        //
    }

    public function store(StoreCustomerPostRequest $request)
    {
        // user create--------------------
        $addUser = new CustomersCheck();
        $addUser->username = $request->username;
        $addUser->email = $request->email;
        $addUser->phone = $request->phone;
        $addUser->alt_phone = $request->alt_phone ?? '';
        $addUser->platform_name = $request->platform_name;
        $addUser->is_login = $request->is_login;
        $addUser->save();

        if ($addUser == true) {
            return response([
                'signature' => $this->signature,
                'data' => $addUser,
                'message' => 'created'
            ], '201');
        }

        return response(
            [
                'signature' => $this->signature,
                'status' => 'error',
                'message' => 'something went wrong'
            ],
            '400'
        );
    }


    public function show(Request $request, $username)
    {

        $username = $username;
        $customerData = $this->checkCustomer($username);

        // login check-------------
        if ($customerData) {

            $totallog = count($customerData->loginHistory);
            $msg='';
            if ($customerData->login_limit <= $totallog) {
                $customerData->is_login=1;
                $msg ='Already logged in too many devices.Are you sure want to login here and logout from other devices?';
            }
            if ($customerData->login_limit > $totallog) {
                $customerData->is_login=0;
            }
            return response()->json([
                'signature' => $this->signature,
                'data' => $customerData,
                'msg'=>$msg,
                'total_login_devices' => $totallog,
                'status' => 'Fetch success'
            ]);
        }
        return response()->json([
            'signature' => $this->signature,
            'msg' => 'No user found. Need to store in middle-auth database',
            'status' => 'Fetch success',
        ]);
    }


    public function update(UpdateRequest $request, $username)
    {

        $customerCheck = $this->checkCustomer($username);

        if ($customerCheck) {

            $updateStatusLogin = '';
            $updateStatusActive = '';

            if ($request->has('is_login')) {
                $updateStatusLogin = CustomersCheck::where('id', $customerCheck->id)->update([
                    'is_login' => $request->is_login,
                ]);
            }
            if ($request->has('is_active')) {
                $updateStatusActive = CustomersCheck::where('id', $customerCheck->id)->update([
                    'is_active' => $request->is_active,
                ]);
            }


            return
                response(
                    [
                        'signature' => $this->signature,
                        'is_login' => $updateStatusLogin,
                        'is_active' => $updateStatusActive,
                        'message' => 'Updated successfully'
                    ],
                    '200'
                );
        }

        return response(
            [
                'signature' => $this->signature,
                'message' => 'Somethings is went wrong or user not found'
            ],
            '400'
        );
    }

    public function destroy($username)
    {
        $results = CustomersCheck::where('username', $username)->delete();
        if ($results) {
            return response(
                [
                    'signature' => $this->signature,
                    'message' => 'deteted Succesfully'
                ],
                '200'
            );
        } else {
            return response(
                [
                    'signature' => $this->signature,
                    'message' => 'You do not have permission to detete'
                ],
                '400'
            );
        }

    }

    function checkCustomer($username)
    {

        if (is_numeric($username)) {
            return CustomersCheck::with('loginHistory')->where('phone', $username)->first();
        } elseif (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return CustomersCheck::with('loginHistory')->where('email', $username)->first();
        }
        return CustomersCheck::with('loginHistory')->where('username', $username)->first();
    }
}
