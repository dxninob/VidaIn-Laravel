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
// Route::get('/video', 'App\Http\Controllers\HomeController@watchVideo')->name("home.watchVideo");
// Route::get('/index', 'App\Http\Controllers\HomeController@index')->name("home.index");
// Route::get('/users', 'App\Http\Controllers\HomeController@selectUser')->name("home.selectUser");




Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/usuario', 'App\Http\Controllers\HomeController@user')->name('user');
Route::get('/planes', 'App\Http\Controllers\HomeController@planes')->name('planes');
Route::get('/letra', 'App\Http\Controllers\HomeController@letra')->name('letra');
Route::get('/emergencia', 'App\Http\Controllers\HomeController@emergencia')->name('emergencia');

// Route::get('/login/users', 'App\Http\Controllers\AuthController@login')->name("login.users");
Route::get('/registro/paciente', 'App\Http\Controllers\AuthController@registerPatient')->name("register.patient");
Route::get('/registro/doctor', 'App\Http\Controllers\AuthController@registerDoctor')->name("register.doctor");
Route::get('/registro/acompanante', 'App\Http\Controllers\AuthController@registerCuidador')->name("register.cuidador");

Route::get('/paciente/video', 'App\Http\Controllers\PatientController@video')->name("home.video");
Route::get('/paciente/intensidad', 'App\Http\Controllers\PatientController@intensidad')->name("home.intensidad");
Route::get('/paciente/prueba', 'App\Http\Controllers\PatientController@index')->name("home.test");
Route::get('/paciente/prueba/index', 'App\Http\Controllers\TestController@index')->name("test.index");
Route::post('/paciente/prueba/save', 'App\Http\Controllers\TestController@save')->name("test.save");
Route::get('/paciente/prueba/resultados', 'App\Http\Controllers\TestController@resultados')->name("test.resultados");
Route::get('/paciente/actividades/index', 'App\Http\Controllers\ActivityController@index')->name("actividades.index");
Route::get('/paciente/actividades/calendario', 'App\Http\Controllers\ActivityController@calendario')->name("actividades.calendario");
Route::get('/paciente/actividades/save', 'App\Http\Controllers\ActivityController@save')->name("activities.save");
Route::get('/paciente/actividades/{id}', 'App\Http\Controllers\ActivityController@show')->name("activities.show");

Route::get('/acompanante/index', 'App\Http\Controllers\CuidadorController@index')->name('cuidador.index');

// Route::get('/patient/emergencia', 'App\Http\Controllers\HomeController@emergencia')->name("home.emergencia");
// Route::get('/paciente/intensidad', 'App\Http\Controllers\PatientController@intensidad');


// Route::get('/doctor/patients', 'App\Http\Controllers\UserController@index')->name("doctor.user.index");
// Route::get('/doctor/patients/{id}', 'App\Http\Controllers\UserController@show')->name("doctor.user.show");

Auth::routes();
