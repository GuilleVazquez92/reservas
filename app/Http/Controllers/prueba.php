<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests;

class prueba extends Controller
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
	   
		public function aloja(Request $request)
		{
			$term = $request->get('term');

			$token = $this->getToken();
	    	$endpoint = 'https://test.api.amadeus.com/v1/reference-data/locations';
	    	$travel_data = array(
	    		'subType'=> 'CITY,AIRPORT',
	    	  	'keyword'     => $request->get('term')
			  
	    	);
	    	$params = http_build_query($travel_data);
			$url = $endpoint . "?" . $params;
			$headers = array('Authorization' => 'Bearer '.$token);
			$response = Requests::get($url, $headers);
			$body = json_decode($response->body);
			

			
			foreach ($body->data as  $date) {
			
				$lavel[] = ['name'=>$date->name,
							'iataCode'=>$date->iataCode,
							'city'=> $date->address->cityName


				];

		

			}
		return $lavel;	
		//dd ($body);
	}
}