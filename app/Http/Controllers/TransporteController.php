<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App;

class TransporteController extends Controller
{
    
		public function busqueda()
	{

		$ciudades= App\Ciudad::all();
		

		$params['ciudades'] = $ciudades;
		
		return view('Transportes.busqueda',$params); 
	}


}
