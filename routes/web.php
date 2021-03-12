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
})->name('inicio');

Route::get('/proveedores', function () {
	return view('inicio/proveedores');
})->name('proveedores');


Route::get('prueba', function () {
	return view('vuelos.opciones');
});

Route::get('vuelos', function () {
	return view('vuelos.consulta');
})->name('consultaVuelo');

Route::get('amadeus/flights', 'AmadeusController@flights');
Route::get('amadeus/flightsConfirm', 'AmadeusController@flightsConfirm')->name('flightsConfirm');
Route::post('amadeus/flightsConfirm', 'AmadeusController@flightsConfirm')->name('flightsConfirma');
Route::post('amadeus/busqueda', 'AmadeusController@flights')->name('busqueda');
Route::get('amadeus/consulta', 'prueba@aloja')->name('vuelos');



//--- rutas para Administrador de Alojamiento ---

Route::get('regimenes', 'AlojamientoController@regimenes');
Route::post('regimenes', 'AlojamientoController@cargarRegimenes')->name('regimenes');
Route::get('habitaciones', 'AlojamientoController@habitaciones');
Route::post('habitaciones', 'AlojamientoController@cargar_habitaciones')->name('habitaciones');

Route::get('mostrareditarHabitacion', 'AlojamientoController@mostrareditarHabitacion')->name('mostrareditarHabitacion'); 
Route::post('editarHabitacion', 'AlojamientoController@editarHabitacion')->name('editarHabitacion'); 
Route::get('eliminarHabitacion', 'AlojamientoController@eliminarHabitacion')->name('eliminarHabitacion'); 
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

Route::get('EditarAlojamientos', 'RegistroAlojamiento@mostrarAlojamiento')->name('EditarAlojamiento');
Route::get('EditarAlojamiento', 'RegistroAlojamiento@edit')->name('editAlojamiento');
Route::get('editAlojamiento', 'RegistroAlojamiento@edit')->name('editAlojamientos');
Route::post('editAlojamientos', 'RegistroAlojamiento@editar')->name('AlojaEditar');


Route::get('eliminarAlojamiento', 'RegistroAlojamiento@eliminar')->name('eliminarAlojamiento');




//--- rutas para buscar Alojamiento ---


Route::get('reservar', 'reservas@mostrar')->name('reservarAloja');
Route::post('reservar', 'reservas@cargar')->name('reservarAlojamiento');

Route::post('reservalogin', 'reservas@login')->name('reservasLogin');

Route::get('cancelar/reserva', 'reservas@cancelar')->name('cancelarAlojamiento');

//--- RUTAS DE PAGO ---

Route::post('pagos', 'PagosController@pago' )->name('pagos');
Route::post('pagosvuelos', 'PagosController@pagoVuelos' )->name('pagosvuelos');
Route::get('pagos', 'PagosController@mostrar');
Route::post('pagos/monto', 'PagosController@mostrar')->name('mostrarPago');
Route::post('pagos/montos', 'PagosController@mostrarVuelo')->name('mostrarPagoVuelo');
Route::post('otro', 'PagosController@otro' )->name('otro');
Route::post('pagosAloja', 'PagosController@aloja')->name('pagosAloja');


//--- RUTAS DE TRANSPORTE---

Route::get('Transportebusqueda', 'TransporteController@busqueda');
Route::post('Transportereservar', 'TransporteController@reservar')->name('reservarTransporte');



		// Reservas Routes
Route::get('user/info', 'UserController@info')->name('userInfo');
Route::get('user/reservas', 'UserController@reservas')->name('userReservas');
Route::get('user/pagos', 'UserController@pagos')->name('userPagos');
Route::get('reservas/vuelos','AmadeusController@reservaVuelos') ->name('reservasVuelos');
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

			// Confirmacion de Correo

Route::get('register/verify/{code}','Auth\RegisterController@verify')->name('verify'); 