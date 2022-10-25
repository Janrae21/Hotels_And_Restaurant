<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Hotels', function(){
    return view('Hotels');
});

Route::get('/Contact Us', function(){
    return view('Contact Us');
});

Route::get('/About Us', function () {
    return view('About Us');
});

Route::get('/Luzon', function () {
    return view('Luzon');
});

Route::get('/Visayas', function () {
    return view('Visayas');
});

Route::get('/Mindanao', function () {
    return view('Mindanao');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/BookingForm', function(){
    return view('BookingForm');
});

Route::get('/Restaurant', function(){
    return view('Restaurant');
});

Route::get('/Restaurant-luzon', function(){
    return view('Restaurant-luzon');
});

Route::get('/Restaurant-Visayas', function(){
    return view('Restaurant-Visayas');
});

Route::get('/Restaurant-Mindanao', function(){
    return view('Restaurant-Mindanao');
});

Route::get('/BookingRestaurant', function(){
    return view('BookingRestaurant');
});


