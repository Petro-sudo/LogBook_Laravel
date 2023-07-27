<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\MentorController;

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
    //Route::post('/enter on browser', 'name on the control ')->name('routing name');

});
//Route::get('/redirects',[HomeController::class, "index"]);
//admin
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-admin', 'adminview')->name('admin-admin');
    Route::get('/admindasboard', 'adminback')->name('back-admin');





});

//intern
Route::controller(InternController::class)->group(function () {
    Route::get('/admin-intern', 'internview')->name('admin-intern');
});

//mentor
Route::controller(MentorController::class)->group(function () {
    Route::get('/admin-mentor', 'mentorview')->name('admin-mentor');
    // Route::get('/admin-mentor/{mentor}/edit', 'edit')->name('editmentor');
    Route::get('/create', 'getmentorpage')->name('create-mentor');
    Route::post('/storementor', 'storementor')->name('storementor');
    Route::get('/mentor/{mentor}/edit', 'edit')->name('editmentor');
    //Route::post('/update/{mentorId}', 'update')->name('updatementor');
});


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');