<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

		//echo "Cantidad de vuelos: {$body->meta->count}</br></br>";

		foreach($body->data as $flight) {
			$id= $flight->id;
			$precio =$flight->price->total;
			$duracion = $flight->itineraries[0]->duration;

			foreach($flight->itineraries[0]->segments as $seg) {

				$fecha_salida = Carbon::parse($seg->departure->at)->format('d-m-Y');
				$hora_salida = Carbon::parse($seg->departure->at)->format('H:i');
				$fecha_llegada = Carbon::parse($seg->arrival->at)->format('d-m-Y');
				$hora_llegada = Carbon::parse($seg->arrival->at)->format('H:i');

				$salida = $seg->departure->iataCode;
				$llegada = $seg->arrival->iataCode;
				$vuelo_numero = $seg->number;
			}
		}
		

		$vuelos['id']=$id;
		$vuelos['precio']=$precio;
		$vuelos['duracion']=$duracion;
		$vuelos['fecha_salida']=$fecha_salida;
		$vuelos['fecha_llegada']=$fecha_llegada;
		$vuelos['hora_salida']=$hora_salida;
		$vuelos['hora_llegada']=$hora_llegada;
		$vuelos['salida']=$salida;
		$vuelos['llegada']=$llegada;
		$vuelos['vuelo_numero']=$vuelo_numero;
		$vuelos['body']=$body;


		return view('alojamientos.vuelos',$vuelos);
    }


        
   
 		
		
}
