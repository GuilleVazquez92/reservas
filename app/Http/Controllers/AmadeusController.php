<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\ReservaVuelo;
use App\ReservaVueloEscala;
use Requests;
use \Carbon\Carbon;

class AmadeusController extends Controller
{
    private $key;
    private $secret;



    public function __construct() {
    	$this->key = config('services.amadeus.key');
    	$this->secret = config('services.amadeus.secret');
    	Requests::register_autoloader();
    }
    private function getToken() {
    	$url = 'https://test.api.amadeus.com/v1/security/oauth2/token';
    	$auth_data = array(
    		'client_id' => $this->key,
			'client_secret' => $this->secret,
			'grant_type'    => 'client_credentials'
    	);
		$headers = array('Content-Type' => 'application/x-www-form-urlencoded');
		$response = Requests::post($url, $headers, $auth_data);
		
		if (!$response)
			return null;

		$body = json_decode($response->body);
		return $body->access_token;
    }

    	public function flights(Request $request) {
    	
   

    	$token = $this->getToken();
    	$endpoint = 'https://test.api.amadeus.com/v2/shopping/flight-offers';
    	$travel_data = array(
    	  'originLocationCode'     => $request->get('origen'),
		  'destinationLocationCode' => $request->get('destino'),
		  'departureDate'           => $request->get('salida'),
		  'returnDate'				=> $request->get('retorno'),
		  'adults'                  => $request->get('adultos')
    	);
    	$params = http_build_query($travel_data);
		$url = $endpoint . "?" . $params;
		$headers = array('Authorization' => 'Bearer '.$token);
		$response = Requests::get($url, $headers);
		$body = json_decode($response->body);
	
		$vuelos['body']= $body;

	return view('vuelos.opciones',$vuelos);
    }
        


    	public function flightsConfirm(Request $request) {
    	
   
		$re=$request->get('body');
		$body = json_decode($re);
		$userId = \Auth::user()->id;

	
		$newReservaVuelo = new App\ReservaVuelo;
		$newReservaVuelo->iduser = $userId;
		$newReservaVuelo->precio_total = $body->price->grandTotal;
		$newReservaVuelo->bandera = 0;
		$newReservaVuelo->comprador = '';

		$newReservaVuelo->save();
		
		foreach ($body->itineraries as $key => $fligth) {
			foreach ($fligth->segments as $key => $seg) {
		
		$newReservaVueloEscala = new App\ReservaVueloEscala;
		$newReservaVueloEscala->idvuelo = $newReservaVuelo->id;
		$newReservaVueloEscala->idaerolineas = $seg->carrierCode;
		$newReservaVueloEscala->salida = $seg->departure->iataCode ;
		$newReservaVueloEscala->fecha_salida = parsearFechaDeVuelo($seg->departure->at);
		$newReservaVueloEscala->horario_salida = parsearHorarioDeVuelo($seg->departure->at);
		$newReservaVueloEscala->tiempo_salida= parsearDuracionEstimada($seg->duration);
		$newReservaVueloEscala->llegada= $seg->arrival->iataCode ;
		$newReservaVueloEscala->fecha_llegada = parsearFechaDeVuelo($seg->arrival->at);
		$newReservaVueloEscala->horario_llegada= parsearHorarioDeVuelo($seg->arrival->at);
		$newReservaVueloEscala->tiempo_llegada = parsearDuracionEstimada($seg->duration);
		$newReservaVueloEscala->save();
			
			}

		}

 
 	$vuelos = ReservaVuelo::where('iduser', '=', $userId)
						->get();
 	$params['vuelos'] = $vuelos	;

		
	return view('UserAdmin.vuelos',$params);
	
    }

 	public function reservaVuelos()
	{
	$userId = \Auth::user()->id;
	
 	$vuelos = ReservaVuelo::where('iduser', '=', $userId)
						->get();
 	$params['vuelos'] = $vuelos	;

	return view('UserAdmin.vuelos',$params);	
		
}
}
