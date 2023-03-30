<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\UsersLoginCheck ;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginCheckController extends Controller
{


    function islogin(Request $request){


        $username = $request->username;


        $password = $request->password;
        $email="test@easytrax.com";
        $phone='01709888900';

        $userCheck=UsersLoginCheck::where('username',$username)->first();

        if($userCheck){
            $isLogin=$userCheck->is_login;
            if($isLogin!=0){ return \Redirect::back()->withSuccess('You are already login with another device'); }
        }



        // only for demo------------------
        $response = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',

        ])->asForm()->post('https://track.easytrax.com/func/connect.php',
        [
            'username' => $username,
            'password' => $password ,
            'cmd' => 'login',
            'remember_me' => 'true',
            'mobile' => true,
        ]
        );
        // end only demo--------------------------------------
        // dd($response->cookies()->toArray());



        if(!$userCheck){
            if($response->body()!='ERROR_USERNAME_PASSWORD_INCORRECT' && $response->body()!='ERROR_MANY_FAILED_LOGIN_ATTEMPTS'){

                $addUser= new UsersLoginCheck();
                $addUser->username =$username;
                $addUser->email=$email;
                $addUser->phone=$phone;
                $addUser->platform_code='1';
                $addUser->is_login=true;
                $addUser->save();
                $msg='You are GPS-SERVER user. User Add';
                $id=$addUser->id;
                $lgout='1';
            }elseif($response->body()=='ERROR_MANY_FAILED_LOGIN_ATTEMPTS'){

                return \Redirect::back()->withErrors('Many faild log in time Attempts,Try sometime latter');

            }else{
                return \Redirect::back()->withErrors('No account found in gps-server, You are not a user.Contact easytrax');
            }

        }else{
            $addUser=UsersLoginCheck::where('id',$userCheck->id)->update([
                'is_login'=>true,
            ]);
            $id=$userCheck->id;
            $msg='You are GPS-SERVER user. is Log in status true';
            $lgout='1';

        }

        //  dd($response->body());


        $data=[
            'response'=>$response->body(),
            'data'=>$msg,
            'id'=>$id,
            'logout'=>$lgout
        ];

           return view('/dashboard')->with(['data'=>$data]);


    }

    function logout($id){

        $addUser=UsersLoginCheck::where('id',$id)->update([
            'is_login'=>false,
        ]);

        return redirect(route('welcome'))->with('flash_message', ['success','Log out Successfully']);

    }


}
