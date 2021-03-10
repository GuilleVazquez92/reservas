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
use App\Regimen;
use App\Habitacion;
use App\PublicarAlojamiento;
use App\UserPorPublicado;
use App\Http\Requests\ValidarPublicarRequest;

class Publicar extends Controller
{

	public function mostrar()
	{
		$user = \Auth::user()->id;
		$alojamientos= App\Alojamiento::all();
		$habitaciones= App\Habitacion::all();
		$habitaciones = Habitacion::select('habitaciones.*')
                ->where('habitaciones.idusers', '=',$user )
                ->get();
		
		$regimenes = Regimen::select('regimenes.*')
                ->where('regimenes.iduser', '=',$user )
                ->get();
		
		

		$params['alojamientos'] = $alojamientos;
		$params['habitaciones'] = $habitaciones;
		$params['regimenes'] = $regimenes;
		$params['user'] = $user;
		
		$prueba = \Auth::user()->alojamientos;
	
		return view('Admin.Alojamientos.publicar',$params)->with('alojamientos',$prueba); 
	}

	
		public function cargar(ValidarPublicarRequest $request)
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

		$userPorPublicado = new App\UserPorPublicado;
		$userPorPublicado->iduser = $prueba->id;
		$userPorPublicado->idpublicado =  $publinew->id;
		$userPorPublicado->save();

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
			/*$data = Alojamiento::select('alojamientos.*')
                ->join('user-', 'users.idUser', '=', 'categories.user_id')
                ->get();

        		return $data;*/



			$publicados = \Auth::user()->alojamientosPublicados;	
			$params['publicados'] = $publicados;
			//$params['alojamientos'] = $alojamientos;

			/*foreach ($publicados as $key => $publi) {
				
				echo $publi->publicados->alojamiento;
			}*/
			//return $publicados;
			return view('Admin.Alojamientos.verPublicado',$params) ;
			
		}  
	

	}

