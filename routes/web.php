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
    return view('start');
});

Route::view('whoarewe','whoarewe');
Route::view('start','welcome');
Route::view('contact','contact');
Route::view('studio','studio');
Route::view('management','management');
Route::view('test', 'test');
Route::view('about', 'about');
Route::view('portfolio', 'portfolio');
Route::view('bookings', 'bookings');
Route::view('projects', 'projects');

//Mail Route
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');