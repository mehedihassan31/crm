<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginCheckController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\PushNotificationController;

Route::middleware(['single-token'])->group(function () {
    Route::post('/login-history', [PushNotificationController::class, 'storeCustomerToken']);
    Route::post('/force-logout', [PushNotificationController::class, 'forceLogout']);
    Route::apiResource('/customer', LoginCheckController::class);
});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
