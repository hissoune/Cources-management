<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FillierController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\AbonnmentController;
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
Route::get('fillter_fillier/{item}',[homecontroller::class,'fillter_fillier'])->name('fillter_fillier');
Route::get('filter_by_price',[homecontroller::class,'filter_pr_date'])->name('filter_by_price');


Route::middleware(['auth','role:director','verified'])->group(function(){
    Route::get('/dasboard',[Admincontroller::class,'director_statistique'])->name('dasboard');
    Route::get('/show_students',[Admincontroller::class,'show_students'] )->name('show_students');
    Route::get('/show_teachers',[Admincontroller::class,'show_teachers'] )->name('show_teachers');
    Route::get('/cources_tovalidate',[CourseController::class,'cources_tovalidate'] )->name('cources_tovalidate');
    Route::get('/Course_accept/{item}',[CourseController::class,'Course_accept'] )->name('Course_accept');
    Route::get('/Abonnments_show',[AbonnmentController::class,'Abonnments_show'] )->name('Abonnments_show');
    Route::get('/create_abonment',[AbonnmentController::class,'create_abonment'] )->name('create_abonment');
    Route::get('/Edit_abonment/{item}',[AbonnmentController::class,'Edit_abonment'] )->name('Edit_abonment');
    Route::put('/Abonnment_update{item}',[AbonnmentController::class,'Abonnment_update'] )->name('Abonnment_update');
    Route::delete('/delete_abonnment{item}',[AbonnmentController::class,'delete_abonnment'] )->name('delete_abonnment');
    Route::post('/Abonnment_store',[AbonnmentController::class,'Abonnment_store'] )->name('Abonnment_store');
    Route::resource('/fillier',FillierController::class );
    Route::resource('/classe',ClasseController::class );
    
});

Route::middleware(['auth','role:teacher','verified'])->group(function(){
    Route::get('/teacher', function () {return view('teacher');})->name('teacher');
    Route::resource('/Courses',CourseController::class );
    Route::get('show_reservation',[Reservationcontroller::class,'show_reservation'])->name('show_reservation');
    Route::get('show_studentss',[Reservationcontroller::class,'show_students'])->name('show_studentss');
    Route::put('accept_reservation/{item}',[Reservationcontroller::class,'accept_reservation'])->name('accept_reservation');
    Route::put('add_description/{Teacher}',[Admincontroller::class,'add_description'])->name('add_description');
    Route::get('evaluate_student/{student}',[Evaluationcontroller::class,'evaluate_student'])->name('evaluate_student');
    Route::put('refiouse_reservation/{item}',[Reservationcontroller::class,'refiouse_reservation'])->name('refiouse_reservation');
    Route::get('show_notes',[Evaluationcontroller::class,'show_notes'])->name('show_notes');
    Route::get('followers',[Evaluationcontroller::class,'followers'])->name('followers');
    Route::get('Abonnments_teacher',[AbonnmentController::class,'Abonnments_teacher'])->name('Abonnments_teacher');
    Route::get('checkout_abonnment/{Abonnment}',[AbonnmentController::class,'checkout_abonnment'])->name('checkout_abonnment');
    Route::post('session_abonnment/{Abonnment}',[AbonnmentController::class,'session_abonnment'])->name('session_abonnment');
    Route::get('success_Abonnment/{Abonnment}',[AbonnmentController::class,'success_Abonnment'])->name('success_Abonnment');
    Route::get('Resume_teacher/{item}',[SummaryController::class,'Resume_teacher'])->name('Resume_teacher');
    Route::post('Add_resume',[SummaryController::class,'Add_resume'])->name('Add_resume');
    Route::put('update_resume/{resume}',[SummaryController::class,'update_resume'])->name('update_resume');


});
Route::middleware(['auth','role:student','verified'])->group(function(){
    Route::post('reserve_espec/{cor}',[Reservationcontroller::class,'reserve_espec'])->name('reserve_espec');
    Route::post('evaluate_T',[Evaluationcontroller::class,'evaluate_T'])->name('evaluate_T');
    Route::post('follow',[Evaluationcontroller::class,'follow'])->name('follow');
    Route::post('unfollow',[Evaluationcontroller::class,'unfollow'])->name('unfollow');
    Route::get('cources_for_student',[CourseController::class,'cources_for_student'])->name('cources_for_student');
    Route::get('Resume/{cor}',[SummaryController::class,'Resume'])->name('Resume');

});
Route::middleware(['auth','verified'])->group(function(){
    Route::get('profile',[Admincontroller::class,'profile'])->name('profile');
  
});

Route::get('/checkout/{cor}', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/session/{cor}', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success/{cor}', 'App\Http\Controllers\StripeController@success')->name('success');


require __DIR__.'/auth.php';