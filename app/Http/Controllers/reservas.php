<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicarAlojamiento;
use App\Reserva;
use \Carbon\Carbon;
use App;
use DB;
use App\Http\Requests\BusquedaRequest;
class reservas extends Controller
{
	
     
	public function mostrar()
	{
		$ciudades= App\Ciudad::all();
		$params['ciudades'] = $ciudades;
		$tipo= App\TipoHabitacion::all();
		$params['tipo'] = $tipo;
		$fotos= App\Fotos::all();
        $params['fotos'] = $fotos;
		
		return view('alojamientos.inicio', $params);

	}

		public function cargar(BusquedaRequest $request)
	{


		$dbDesde = Carbon::parse($request->get('check-in'))->format('Y-m-d');
		$dbHasta = Carbon::parse($request->get('check-out'))->format('Y-m-d');
		
		$formatted_dt1=Carbon::parse($request->get('check-in'));
		$formatted_dt2=Carbon::parse($request->get('check-out'));
		$fecha=$formatted_dt1->diffInDays($formatted_dt2);

	


		$publicados = PublicarAlojamiento::join('reservas', function($join) use($dbDesde, $dbHasta) {
			$join->where('publicar_alojamiento.id','=','reservas.idpublicado');
			$join->whereNotBetween('reservas.fecha_entrada', [$dbDesde, $dbHasta]);
			$join->whereNotBetween('reservas.fecha_salida', [$dbDesde, $dbHasta]);

			$join->orWhere('publicar_alojamiento.id','!=','reservas.idpublicado');
		})
		->whereBetween('fecha_inicio', [$dbDesde, $dbHasta])
		->whereBetween('fecha_fin', [$dbDesde, $dbHasta])
		->get();				
		
       	
		$ciudad = $request->get('city');

		$p= count($publicados);
		$params['publicados'] = $publicados;				
		$fotos= App\Fotos::all();
        $params['fotos'] = $fotos;
		$params ['fecha'] = $fecha;
		$params ['p'] = $p;
		$params['ciudad']=$ciudad;
		$params['dbDesde']=$dbDesde;
		$params['dbHasta']=$dbHasta;
        
		return view('alojamientos.busqueda', $params);
			
		

					
	}

	public function login(Request $request) 
		{ 
			$prueba = \Auth::user();
			if ( !empty($prueba) ) {
			$precio = $request->get('precio');
			$id=$request->get('id');

			$desde = $request->get('dbDesde');
			$hasta = $request->get('dbHasta');
			


			$publicados = PublicarAlojamiento::where('id', '=',$id)
						->get();
			

			$prueba = \Auth::user()->id;			
			$ciudad = $request->get('city');
			$params['ciudad']=$ciudad;
			$params['publicados'] = $publicados;
			$params['precio'] = $precio;
			$params['desde'] = $desde;
			$params['hasta'] = $hasta;

			$reservaNueva = new App\Reserva;
			$reservaNueva->iduser = $prueba;
			$reservaNueva->idpublicado= $request->get('id');
			$reservaNueva->fecha_entrada= $desde;
			$reservaNueva->fecha_salida= $hasta;
			$reservaNueva->precio_total=$precio;
			$reservaNueva->bandera=0;
			$reservaNueva->save();
		

			
			return view('alojamientos.reserva',$params);
			


				
    
			} else {
					
			$url = $request->path();
			$params['url'] = $url;
			return view('auth.login',$params);
			}

		}

		public function cancelar(Request $request)
	{
		
		$estado = $request->get('estado');
		$id = $request->get('id');

		$app = Reserva::find($id);
		$app->bandera = $estado;
		$app->save();

		$prueba = \Auth::user();
			if ( !empty($prueba) ) {
					
			
			$reserva = Reserva::where('iduser', '=',$prueba->id)
						->get();
			

			
			$params['reserva']=$reserva;
			
			//return $params;
			return view('UserAdmin.reservas',$params);

			}else {
					
				
			echo 'No ha iniciado sesion';
			}
	
	}

}
