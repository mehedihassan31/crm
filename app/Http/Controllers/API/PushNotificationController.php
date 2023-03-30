<?php

namespace App\Http\Controllers\API;

use config;
use Exception;
use Illuminate\Http\Request;
use App\Models\API\CustomersCheck;
use App\Models\API\AppLoginHistory;
use App\Http\Controllers\Controller;
use App\Models\CustomerNotification;
use App\Events\PushNotificationEvent;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\API\loginHistoryLog;

class PushNotificationController extends Controller
{
    public function storeCustomerToken(loginHistoryLog $request)
    {
        $customer = CustomersCheck::where('username', $request->username)->first();
        try {
            $logHistory = AppLoginHistory::find($customer->id);
            $logHistory->updateOrCreate(
                [
                    'id' => $logHistory->id
                ],
                [
                    'customers_check_id' => $customer->id,
                    'device_token' => $request->device_token,
                    'device_model' => $request->device_model,
                    'os' => $request->os,
                    'os_version' =>  $request->os_version,
                    'location' =>  $request->location,
                ]
            );

            return response()->json([
                'data' => $logHistory,
                'status' => 'Fetch Successfully',
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'status' => 'error',
            ], 400);
        }
    }

    public function forceLogout(Request $request)
    {

        $customer = CustomersCheck::where('username', $request->username)->first();
        // notification sent
        $data['title'] = 'Force logout';
        $action = [
            'action' => 'logout'
        ];
        $data['body'] = $action;
        $data['id'] = $request->login_history_id;

        CustomerNotification::create([
            'customers_check_id' => $customer->customers_check_id,
            'title' => $data['title'],
            'body' => $data['body'],
            'notification_type' => 1,
        ]);
        $results = event(new PushNotificationEvent($data));
        $logHistories = [];
        foreach ($results as $result) {
            if(isset($result->log_history)){
                $logHistories['log_history'] = $result->log_history;
            }
        }

        if ($logHistories) {
            return response()->json([
                'msg' => 'No data found',
                'status' => 'error',
            ], 400);
        } else {
            return response()->json([
                'msg' => 'Logout Notification send Successfully',
                'status' => 'Fetch Successfully',
            ], 200);
        }
    }
}
