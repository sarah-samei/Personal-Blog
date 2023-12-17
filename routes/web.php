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
	return view('index');
});

Route::get('/welcome', function () {
	return view('welcome');
});

Route::get('/about_me', function () {
	return view('about_me');
});

Route::get('/resin', function () {
	return view('resin');
});

/*Route::get('/draw', function () {
	return view('draw');
});*/

Route::get('/writing', function () {
	return view('my_writing');
});
Route::get('/food&cake', function () {
	return view('food&cake');
});
Route::resource('/admin', '\App\Http\Controllers\AdminController');

Route::resource('/user', '\App\Http\Controllers\UserController');
Route::get('/draw', '\App\Http\Controllers\UserController@draw');
Route::get('/resin', '\App\Http\Controllers\UserController@resin');
Route::get('/food', '\App\Http\Controllers\UserController@food');
Route::get('/cake', '\App\Http\Controllers\UserController@cake');
Route::get('/writing', '\App\Http\Controllers\UserController@writing');
