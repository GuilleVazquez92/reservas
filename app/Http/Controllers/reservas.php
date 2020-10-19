<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
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


			$miarray = array();
			$miarray["destino"] = $request->get('city');
			$miarray["llegada"] = $request->get('check-in');
			$miarray["salida"] = $request->get('check-out');
			$miarray["adultos"] = $request->get('adult');
			$miarray["nino"] = $request->get('children');
			$miarray["tipo"] = $request->get('room');
			

		
			
			//echo('$miarray["llegada"]');

		
			$ok=DB::SELECT('
			SELECT alojamientos.nombre, alojamientos.direccion 
			FROM publicar_alojamiento, alojamientos 
			WHERE publicar_alojamiento.idhabitacion = '.$miarray["tipo"].'
			AND publicar_alojamiento.idalojamiento = alojamientos.id
			AND publicar_alojamiento.fecha_inicio  = date('.$miarray["llegada"].')
			AND publicar_alojamiento.fecha_fin = date('.$miarray["salida"].')
			');

		   //return view('alojamientos.busqueda') ->with('ok',$ok);         
		         //dd($miarray);   
				dd($ok);
					
			}

}
