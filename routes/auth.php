<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistredUsers;
use App\Http\Controllers\Auth\EmailVerification;
use App\Http\Controllers\Auth\AuthenticatedUsers;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware('guest')->group(function(){

    Route::get('/login',[AuthenticatedUsers::class,'create'])->name('login');
    Route::get('/register',[RegistredUsers::class,'create'])->name('register');
    Route::post('/registred',[RegistredUsers::class,'store'])->name('registred');
    Route::post('/logedin', [AuthenticatedUsers::class, 'store'])->name('logedin');
    
});
Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthenticatedUsers::class, 'logout'])->name('logout');
    Route::get('verify-email', EmailVerification::class)
    ->name('verification.notice');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->name('verification.send');


   
});

