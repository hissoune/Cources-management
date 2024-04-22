<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistredUsers;
use App\Http\Controllers\Auth\AuthenticatedUsers;

Route::middleware('guest')->group(function(){

    Route::get('/login',[AuthenticatedUsers::class,'create'])->name('login');
    Route::get('/register',[RegistredUsers::class,'create'])->name('register');
    Route::get('/forget.password',[RegistredUsers::class,'forget_password'])->name('forget.password');
    Route::get('/reset-password/{token}',[RegistredUsers::class,'reset_password'])->name('reset-password');
    Route::post('/send_Email',[RegistredUsers::class,'send_Email'])->name('send_Email');
    Route::get('/verify_email/{user}',[RegistredUsers::class,'verify_email'])->name('verify_email');
    Route::get('/verify_sent/{user}',[RegistredUsers::class,'verify_sent'])->name('verify_sent');
    Route::get('/rsend_Email/{user}',[RegistredUsers::class,'rsend_Email'])->name('rsend_Email');
    Route::post('/reste_pass',[RegistredUsers::class,'reste_pass'])->name('reste_pass');
    Route::post('/registred',[RegistredUsers::class,'store'])->name('registred');
    Route::post('/logedin', [AuthenticatedUsers::class, 'store'])->name('logedin');
    
});
Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthenticatedUsers::class, 'logout'])->name('logout');
    
  


   
});

