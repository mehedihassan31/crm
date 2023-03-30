<?php

namespace App\Listeners;

use config;
use App\Models\PushNotification;
use App\Models\API\AppLoginHistory;
use Illuminate\Support\Facades\Log;
use App\Events\PushNotificationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPushNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PushNotificationEvent $event): PushNotificationEvent
    {
        $loginHistory=$event->data['id'];
         $appLoginHistory= AppLoginHistory::find($loginHistory);
         if(!$appLoginHistory){

            $event->log_history=false;
            return $event;
         }

         $firebaseToken=$appLoginHistory->device_token;
        //  Log::debug($firebaseToken);

        $SERVER_API_KEY = config('app.firebase_server_api_key');

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $event->data['title'] ?? 'Notification Title',
                "body" => $event->data['body'] ?? 'This is notification body',
            ]
        ];


        $dataString = json_encode($data);
        // Log::debug($dataString);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        $response = curl_exec($ch);

        $appLoginHistory->delete();


        return $event;
    }
}
