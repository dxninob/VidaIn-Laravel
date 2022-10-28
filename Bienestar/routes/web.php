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

Route::get('/index', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/test/index', 'App\Http\Controllers\TestController@index')->name("test.index");
Route::post('/test/save', 'App\Http\Controllers\TestController@save')->name("test.save");
Route::get('/test/graphics', 'App\Http\Controllers\TestController@graphics')->name("test.graphics");
Route::get('/cuidador/activities/{id}', 'App\Http\Controllers\CuidadorController@activities')->name("cuidador.activities");
Route::get('/users', 'App\Http\Controllers\HomeController@selectUser')->name("home.selectUser");
Route::get('/video', 'App\Http\Controllers\HomeController@watchVideo')->name("home.watchVideo");
Route::get('/', 'App\Http\Controllers\HomeController@home')->name("home.home");
Route::get('/inicio', 'App\Http\Controllers\CuidadorController@inicio')->name("cuidador.inicio");

Auth::routes();