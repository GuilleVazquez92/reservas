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
Route::get('info', 'AlojamientoController@info')->name('infoAlojamiento');
Route::get('fotos', 'AlojamientoController@fotos');
Route::post('fotos', 'AlojamientoController@cargarFotos')->name('fotos');
Route::get('condiciones', 'AlojamientoController@condiciones');
Route::get('pagos', 'AlojamientoController@pagos');
Route::get('pagos', 'AlojamientoController@pagos');


//------RUTAS DE PUBLICACION DE ALOJAMIENTOS

Route::get('publicar', 'Publicar@mostrar')->name('publicar');
Route::post('publicar', 'Publicar@cargar')->name('publicarAlojamiento');

Route::get('ReservasRealizadas', 'Publicar@verReservados')->name('ReservasRealizadas');
Route::get('VerPublicados', 'Publicar@verPublicados')->name('VerPublicados');

///---- Regitrar, editar y eliminar Alojamientos
Route::get('RegistrarAlojamiento', 'RegistroAlojamiento@mostrar')->name('RegistrarAlojamiento');
Route::post('RegistrarAlojamiento', 'RegistroAlojamiento@cargarAlojamiento')->name('RegistrarAlojamiento');

Route::get('EditarAlojamiento', 'RegistroAlojamiento@editar')->name('EditarAlojamiento');
Route::post('EditarAlojamiento', 'RegistroAlojamiento@edit')->name('editAlojamiento');



//--- rutas para buscar Alojamiento ---


Route::get('reservar', 'reservas@mostrar')->name('reservarAloja');
Route::post('reservar', 'reservas@cargar')->name('reservarAlojamiento');

Route::post('reservalogin', 'reservas@login')->name('reservasLogin');


//--- RUTAS DE PAGO ---

Route::post('pagos', 'PagosController@pago' )->name('pagos');
Route::get('pagos', 'PagosController@mostrar');
Route::post('pagos/monto', 'PagosController@mostrar')->name('mostrarPago');
Route::post('otro', 'PagosController@otro' )->name('otro');
Route::post('pagosAloja', 'PagosController@aloja')->name('pagosAloja');



		// Reservas Routes
Route::get('user/info', 'UserController@info');
Route::get('user/reservas', 'UserController@reservas');
Route::get('user/pagos', 'UserController@pagos');
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
