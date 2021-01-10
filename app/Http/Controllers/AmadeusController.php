<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests;

class AmadeusController extends Controller
{
    private $key;
    private $secret;

    public function __construct() {
    	$this->key = config('services.amadeus.key');
    	$this->secret = config('services.amadeus.secret');
    	Requests::register_autoloader();
    }

    	 public function flights() {
    	$token = $this->getToken();
    	$endpoint = 'https://test.api.amadeus.com/v2/shopping/flight-offers';
    	$travel_data = array(
    	  'originLocationCode'     => 'BOS',
		  'destinationLocationCode' => 'PAR',
		  'departureDate'           => '2021-01-10',
		  'adults'                  => 2
    	);
    	$params = http_build_query($travel_data);
		$url = $endpoint . "?" . $params;
		$headers = array('Authorization' => 'Bearer '.$token);
		$response = Requests::get($url, $headers);
		$body = json_decode($response->body);

		$vuelos['body']=$body;

		//dd ($response);
		/*echo "Cantidad de vuelos: {$body->meta->count}</br></br>";

		foreach($body->data as $flight) {
			//dd($flight);
			echo "Vuelo ID: {$flight->id}</br>";
			echo "Precio: {$flight->price->total} {$flight->price->currency}</br>";
			echo "Duracion: {$flight->itineraries[0]->duration}</br>";
			foreach($flight->itineraries[0]->segments as $seg) {
				echo "Departure: {$seg->departure->iataCode} a las {$seg->departure->at}</br>";
				echo "Arraival: {$seg->arrival->iataCode} a las {$seg->departure->at}</br>";
			}
			echo "</br></br>";
		}*/
		return view('alojamientos.vuelos',$vuelos);
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
   



}
