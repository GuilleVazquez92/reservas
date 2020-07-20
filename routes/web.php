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
	return view('inicio/inicio');
});

Route::get('inicio', function () {
	return view('admin.info');
});

//--- rutas para Administrador de Alojamiento ---
Route::get('regimenes', 'AlojamientoController@regimenes');
Route::post('regimenes', 'AlojamientoController@cargarRegimenes')->name('regimenes');

Route::get('habitaciones', 'AlojamientoController@habitaciones');
Route::post('habitaciones', 'AlojamientoController@cargar_habitaciones')->name('habitaciones');

Route::get('info', 'AlojamientoController@info');

Route::get('fotos', 'AlojamientoController@fotos');
Route::post('fotos', 'AlojamientoController@cargarFotos')->name('fotos');

Route::get('condiciones', 'AlojamientoController@condiciones');
Route::get('pagos', 'AlojamientoController@pagos');

Route::get('RegistrarAlojamiento', 'RegistroAlojamiento@mostrar')->name('RegistrarAlojamiento');
Route::post('RegistrarAlojamiento', 'RegistroAlojamiento@cargarAlojamiento')->name('RegistrarAlojamiento');

Route::get('pagos', 'AlojamientoController@pagos');

Route::get('prueba', 'prueba@aloja');
Route::post('prueba', 'prueba@cargarPrueba')->name('prueba');




Route::get('paises', 'PaisController@paises');
Route::post('paises', 'PaisController@cargarpaises')->name('paisess');

//Route::get('alojamientos/admin', 'AlojamientoController@admin');
//Route::post('alojamientos/admin', 'prueba@cargarAlojamiento')->name('prueba');

Route::get('opciones', 'opciones@mostrar');
Route::get('opciones/hoteles', 'opciones@mostrar_hoteles');

//Route::get('alojamientos','Registro@aloja');
//Route::post('alojamientos', 'Registro@cargarAlojamiento')->name('alojamiento');

Route::get('Route','UserController@Route');

		// Reservas Routes

//Route::get('reservas/alojamientos', 'reservas@mostrar');
//Route::post('reservas/alojamientos', 'prueba@cargarAlojamiento')->name('prueba');


		// Login Routes .. 
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



        // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');



        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
