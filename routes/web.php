<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('migrate', function () {
    Artisan::call('migrate');
    dd("migrate");
});

Route::get('clear_cache', function () {
    Artisan::call('db:seed');
    dd("seed");
});
Route::get('/', function () {
    return  redirect('login');
});


Route::get('sales/email', [SaleController::class,'sendEmail']);

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::put('/customers/{id}/update-status',[CustomerController::class,'updateStatus']);

    Route::get('products/data', [ProductController::class,'data'])->name('product.data');
    Route::resource('products', ProductController::class);

    Route::get('customers/data', [CustomerController::class,'data'])->name('customer.data');
    Route::resource('customers', CustomerController::class);

    Route::get('sales-invoice/send-email/{id}',[SaleController::class,'sendEmail'])->name('sales-invoice.email');
    Route::get('sales-invoice/data',[SaleController::class,'data'])->name('sales-invoice.data');
    Route::resource('sales-invoice', SaleController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
