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
Route::get('/tamano', 'App\Http\Controllers\HomeController@tamano')->name("home.tamano");
Route::get('/prueba', 'App\Http\Controllers\HomeController@prueba')->name("home.prueba");
Route::get('/usuario', 'App\Http\Controllers\HomeController@usuario')->name("home.usuario");
Route::get('/test/index', 'App\Http\Controllers\TestController@index')->name("test.index");
Route::post('/test/save', 'App\Http\Controllers\TestController@save')->name("test.save");
Route::get('/test/graphics', 'App\Http\Controllers\TestController@graphics')->name("test.graphics");

Auth::routes();