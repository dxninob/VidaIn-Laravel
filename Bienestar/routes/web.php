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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/test/index1', 'App\Http\Controllers\TestController@index')->name("test.index1");


Route::post('/test/save', 'App\Http\Controllers\TestController@save')->name("test.save");
Route::get('/test/graphics', 'App\Http\Controllers\TestController@graphics')->name("test.graphics");

Route::get('/doctor/patients', 'App\Http\Controllers\UserController@index')->name("doctor.user.index");
Route::get('/doctor/patients/{id}', 'App\Http\Controllers\UserController@show')->name("doctor.user.show");

Auth::routes();
