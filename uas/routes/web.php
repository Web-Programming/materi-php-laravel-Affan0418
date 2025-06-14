<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){ return view('auth.login'); })->name('login');
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::group(['middleware' => ['auth', 'check_role:customer']], function(){
    Route::get('/customer', [CustomerController::class, 'customer'])->name('customer');
});
Route::group(['middleware' => ['auth', 'check_role:admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);