<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\YearsController;

Route::get('/', function () {
    return view('welcome');
});
//login and register
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/admin', 'dashboard')->name('admin');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/viewinternreport/{user}/view', 'viewinternReport')->name('reporinterntview');
    //Route::get('/getmentor', 'getmentor')->name('getmentor');
    //Route::post('/enter on browser', 'name on the control ')->name('routing name');

});
//Route::get('/redirects',[HomeController::class, "index"]);
//admin
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-admin', 'adminview')->name('admin-admin');
    Route::get('/admindasboard', 'adminback')->name('back-admin');
    Route::get('/2023colleague', 'colleague2023')->name('colleague-2023');
});

//intern
Route::controller(InternController::class)->group(function () {
    Route::get('/admin-intern', 'internview')->name('admin-intern');
    Route::get('/profile', 'profile')->name('internProfile');
    Route::get('/editprofile/{user}/edit', 'editprofile')->name('editprofile');
    Route::put('/updateprofile/{user}/update', 'updateprofile')->name('updateprofile');
    //Route::get('/getmentor', 'getmentor')->name('getmentor');
    Route::get('/reports', 'report')->name('internReport');
    Route::get('/savereports', 'savereport')->name('saveReport');
    Route::get('/createreport', 'createreport')->name('createReport');
    Route::post('/storereport', 'storereport')->name('storereport');
    Route::get('/editreport/{report}/edit', 'edit')->name('editreport');
    Route::put('/report/{report}/update', 'updateReport')->name('updatereports');
    Route::get('/searchintern', 'search')->name('searchintern');
    Route::get('/submitreport', 'submit')->name('submitreport');
    Route::get('/submitreport/{report}/sumbit', 'submitReport')->name('reportsubmit');
  
    
});

//mentor
Route::controller(MentorController::class)->group(function () {
    Route::get('/admin-mentor', 'mentorview')->name('admin-mentor');
    Route::get('/mprofile', 'profile')->name('mentorProfile');
    Route::get('/editmentorprofile/{user}/edit', 'editmentorprofile')->name('editmentorprofile');
    Route::put('/updatementorprofile/{user}/update', 'updatementorprofile')->name('updatementorprofile');
    Route::get('/viewreport', 'view')->name('viewreport');
   // Route::get('/viewreportdates/{user}/dates', 'date')->name('datereport');
    Route::get('/viewreport/{user}/view', 'viewReport')->name('reportview');
  
});
//years
Route::controller(YearsController::class)->group(function () {
    Route::get('/admin-admin2023', 'adminview2023')->name('admin-admin2023');
    Route::get('/admin-mentor2023', 'mentorview2023')->name('admin-mentor2023');
    Route::get('/admin-intern2023', 'internview2023')->name('admin-intern2023');
  
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');