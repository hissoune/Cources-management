<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FillierController;
use App\Http\Controllers\Evaluationcontroller;
use App\Http\Controllers\Reservationcontroller;

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

Route::get('/',[homecontroller::class,'index'])->name('/');
Route::get('about_us',[homecontroller::class,'about'])->name('about');
Route::get('courcess',[homecontroller::class,'courcess'])->name('courcess');
Route::get('cource_details/{cor}',[homecontroller::class,'cource_details'])->name('cource_details');
Route::get('search_details',[homecontroller::class,'search_details'])->name('search_details');
Route::get('teacheres',[homecontroller::class,'teacheres'])->name('teacheres');
Route::get('filliers',[homecontroller::class,'filliers'])->name('filliers');
Route::get('search',[homecontroller::class,'search'])->name('search');
Route::get('teacheres_profile/{Teacher}',[homecontroller::class,'teacheres_profile'])->name('teacheres_profile');


Route::middleware(['auth','role:director'])->group(function(){
    Route::get('/dasboard', function () {
        return view('director');
    })->name('dasboard');
    Route::get('/show_students',[Admincontroller::class,'show_students'] )->name('show_students');
    Route::get('/show_teachers',[Admincontroller::class,'show_teachers'] )->name('show_teachers');
    Route::resource('/fillier',FillierController::class );
    Route::resource('/Classes',ClasseController::class );
    
});

Route::middleware(['auth','role:teacher'])->group(function(){
    Route::get('/teacher', function () {return view('teacher');})->name('teacher');
    Route::resource('/Courses',CourseController::class );
    Route::get('show_reservation',[Reservationcontroller::class,'show_reservation'])->name('show_reservation');
    Route::get('show_studentss',[Reservationcontroller::class,'show_students'])->name('show_studentss');
    Route::put('accept_reservation/{item}',[Reservationcontroller::class,'accept_reservation'])->name('accept_reservation');
    Route::get('evaluate_student/{student}',[Evaluationcontroller::class,'evaluate_student'])->name('evaluate_student');
    Route::post('evaluate_s',[Evaluationcontroller::class,'evaluate_s'])->name('evaluate_s');
    Route::put('refiouse_reservation/{item}',[Reservationcontroller::class,'refiouse_reservation'])->name('refiouse_reservation');

});
Route::middleware(['auth','role:student'])->group(function(){
    Route::post('reserve_espec/{cor}',[Reservationcontroller::class,'reserve_espec'])->name('reserve_espec');
    Route::get('show_notes',[Evaluationcontroller::class,'show_notes'])->name('show_notes');

});




require __DIR__.'/auth.php';