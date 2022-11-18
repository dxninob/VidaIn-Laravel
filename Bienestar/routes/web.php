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
Route::get('/emergencia', 'App\Http\Controllers\HomeController@emergencia')->name("home.emergencia");
Route::get('/intensidad', 'App\Http\Controllers\HomeController@intensidad')->name("home.intensidad");
Route::get('/calendario', 'App\Http\Controllers\HomeController@calendario')->name("home.calendario");
Route::get('/video', 'App\Http\Controllers\HomeController@video')->name("home.video");
Route::get('/registro', 'App\Http\Controllers\HomeController@registro')->name("home.registro");
Route::get('/planes', 'App\Http\Controllers\HomeController@planes')->name("home.planes");
Route::get('/dominio', 'App\Http\Controllers\HomeController@dominio')->name("home.dominio");
Route::get('/modulo', 'App\Http\Controllers\HomeController@modulo')->name("home.modulo");
Route::get('/actividad', 'App\Http\Controllers\HomeController@actividad')->name("home.actividad");
Route::get('/test/index', 'App\Http\Controllers\TestController@index')->name("test.index");
Route::post('/test/save', 'App\Http\Controllers\TestController@save')->name("test.save");
Route::get('/test/graphics', 'App\Http\Controllers\TestController@graphics')->name("test.graphics");

Auth::routes();