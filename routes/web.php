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
    return view('welcome');
});

Route::get('paises', 'UserController@paises');

Route::post('paises', 'UserController@cargarpaises')->name('paisess');


Route::get('aerolineas','UserController@aero');

Route::get('alojamientos','UserController@aloja');

Route::get('login','UserController@login');

Route::get('menuadmin','UserController@menuadmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
