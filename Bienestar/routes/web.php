<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', 'App\Http\Controllers\HomeController@home')->name("home.home");
Route::get('/video', 'App\Http\Controllers\HomeController@watchVideo')->name("home.watchVideo");
Route::get('/index', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/users', 'App\Http\Controllers\HomeController@selectUser')->name("home.selectUser");
Route::get('/emergencia', 'App\Http\Controllers\HomeController@emergencia')->name("home.emergencia");
Route::get('/intensidad', 'App\Http\Controllers\HomeController@intensidad')->name("home.intensidad");
Route::get('/calendario', 'App\Http\Controllers\HomeController@calendario')->name("home.calendario");
Route::get('/tamano', 'App\Http\Controllers\HomeController@tamano')->name("home.tamano");
Route::get('/prueba', 'App\Http\Controllers\HomeController@prueba')->name("home.prueba");
Route::get('/usuario', 'App\Http\Controllers\HomeController@usuario')->name("home.usuario");

Route::get('/register/patient', 'App\Http\Controllers\AuthController@registerPatient')->name("register.patient");
Route::get('/register/doctor', 'App\Http\Controllers\AuthController@registerDoctor')->name("register.doctor");
Route::get('/register/cuidador', 'App\Http\Controllers\AuthController@registerCuidador')->name("register.cuidador");

Route::get('/test/index1', 'App\Http\Controllers\TestController@index')->name("test.index1");
Route::post('/test/save', 'App\Http\Controllers\TestController@save')->name("test.save");
Route::get('/test/graphics', 'App\Http\Controllers\TestController@graphics')->name("test.graphics");

Route::get('/doctor/patients', 'App\Http\Controllers\UserController@index')->name("doctor.user.index");
Route::get('/doctor/patients/{id}', 'App\Http\Controllers\UserController@show')->name("doctor.user.show");

Route::get('/activities', 'App\Http\Controllers\ActivityController@show')->name("activities.show");
Route::post('/activities/save/{id}', 'App\Http\Controllers\ActivityController@save')->name("activities.save");

Route::get('/cuidador/inicio', 'App\Http\Controllers\CuidadorController@inicio')->name("cuidador.inicio");

Auth::routes();
