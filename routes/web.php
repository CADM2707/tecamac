<?php

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
    return view('home');
});

/*Auth::routes();*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('solicitud/nueva','solicitudController@new')->name('solicitud.nueva');
Route::get('solicitud/nueva2','solicitudController@new2')->name('solicitud.nueva2');
Route::get('solicitud/guardar','solicitudController@save')->name('solicitud.guardar');