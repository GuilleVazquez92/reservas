<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class reservas extends Controller
{

	public function mostrar()
	{
		$ciudades= App\Ciudad::all();
		$params['ciudades'] = $ciudades;
		$tipo= App\TipoHabitacion::all();
		$params['tipo'] = $tipo;
		
		return view('alojamientos.inicio', $params);

	}

		public function cargar(Request $request)
	{
			$publicado = App\PublicarAlojamiento::all();



			$destino = $request->get('city');
			$llegada = $request->get('check-in');
			$salida = $request->get('check-out');
			$adultos = $request->get('adult');
			$nino = $request->get('children');
			$tipo = $request->get('room');

			$p = [$destino,$llegada,$salida,$adultos,$nino,$tipo];
			$params ['p'] = $p;
			dd($params);
					
					
			
	}

}
