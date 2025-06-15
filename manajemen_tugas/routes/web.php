<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//login
Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('login',[AuthController::class, 'loginProses'])->name('loginProses');

//logout
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

//middleware
Route::middleware('checkLogin')->group(function(){
    //dashboard
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');        
    //user
    Route::get('user',[UserController::class, 'index'])->name('user');
    Route::get('user/create',[UserController::class, 'create'])->name('userCreate');
    Route::post('user/store',[UserController::class, 'store'])->name('userStore');
    Route::get('user/edit',[UserController::class, 'edit'])->name('userEdit');
    //tugas
    Route::get('tugas',[TugasController::class, 'index'])->name('tugas');
});

