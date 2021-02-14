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
//------  Pantalla Principal  ---
Route::get('/', function () {
	return view('inicio/index');
});


Route::get('prueba', function () {
	return view('vuelos.opciones');
});

Route::get('vuelos', function () {
	return view('vuelos.consulta');
})->name('consultaVuelo');

Route::get('amadeus/flights', 'AmadeusController@flights');
Route::post('amadeus/busqueda', 'AmadeusController@flights')->name('busqueda');
Route::get('amadeus/consulta', 'prueba@aloja')->name('vuelos');


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
Route::get('publicar', 'Publicar@mostrar')->name('publicar');
Route::post('publicar', 'Publicar@cargar')->name('publicarAlojamiento');


//--- rutas para buscar Alojamiento ---


Route::get('reservar', 'reservas@mostrar')->name('reservarAloja');
Route::post('reservar', 'reservas@cargar')->name('reservarAlojamiento');
Route::post('test','DateController@showDate');
Route::get('paises', 'PaisController@paises');
Route::post('paises', 'PaisController@cargarpaises')->name('paisess');


//--- RUTAS DE PAGO ---

Route::post('pagos', 'PagosController@pago' )->name('pagos');
Route::get('pagos', 'PagosController@mostrar');
Route::post('pagos/monto', 'PagosController@mostrar')->name('mostrarPago');
Route::post('otro', 'PagosController@otro' )->name('otro');


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
