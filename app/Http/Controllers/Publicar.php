<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPorAlojamiento;
use App\User;
use App\TipoHabitacion;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App;
use DB;
use App\Reserva;
use App\PublicarAlojamiento;

class Publicar extends Controller
{

	public function mostrar()
	{
		$alojamientos= App\Alojamiento::all();
		$habitaciones= App\Habitacion::all();
		$regimenes= App\Regimen::all();

		$params['alojamientos'] = $alojamientos;
		$params['habitaciones'] = $habitaciones;
		$params['regimenes'] = $regimenes;
		
		$prueba = \Auth::user()->alojamientos;
	
		return view('Admin.Alojamientos.publicar',$params)->with('alojamientos',$prueba); 
	}

	
		public function cargar(Request $request)
	{
		$prueba = \Auth::user();

		$publinew = new App\PublicarAlojamiento;
		$publinew->iduser= $prueba->id;
		$publinew->idalojamiento= $request->get('idalojamiento');
		$publinew->idhabi= $request->get('idhabitacion');
		$publinew->idregimen= $request->get('idregimen');
		$publinew->fecha_inicio= $request->get('fecha_inicio');
		$publinew->fecha_fin= $request->get('fecha_fin');
		$publinew->save();
		 
		$alojamientos= App\Alojamiento::all();
		$regimenes= App\Regimen::all();
		$habitaciones= App\Habitacion::all();

		$params['alojamientos'] = $alojamientos;
		$params['regimenes'] = $regimenes;
		$params['habitaciones'] = $habitaciones;
			
		$prueba = \Auth::user()->alojamientos;
		

		return view('Admin.Alojamientos.publicar',$params)->with('alojamientos',$prueba); 
		
	}

		public function verReservados()
		{

        	$prueba = \Auth::user();
			if ( !empty($prueba) ) {
					
			
			$reserva = Reserva::select('reservas.*')
                ->join('publicar_alojamiento', 'reservas.idpublicado', '=', 'publicar_alojamiento.id')
                ->where('publicar_alojamiento.iduser', '=',$prueba->id )
                ->get();

    
			

			
			$params['reserva']=$reserva;
			
			//return $params;
			return view('Admin.Alojamientos.reservas',$params);

			}else {
					
				
			echo 'No ha iniciado sesion';
			}
		}

	  public function verPublicados()

		{
			$publicados = \Auth::user()->publicados;
			 

			$params['publicados'] = $publicados;

			return view('Admin.Alojamientos.verPublicado',$params) ;
			
		}  
	

	}

