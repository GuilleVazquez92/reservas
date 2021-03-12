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

		$publicadosReservados = PublicarAlojamiento::join('reservas', function($join) {
			$join->on('publicar_alojamiento.id','=','reservas.idpublicado');
		})
		->select('publicar_alojamiento.*')
		->where('reservas.fecha_salida', '<=', $dbDesde)
		->where('reservas.fecha_salida', '<=', $dbHasta)
		->where('publicar_alojamiento.fecha_inicio', '<=', $dbDesde)
		->where('publicar_alojamiento.fecha_fin', '>=', $dbHasta);

		$publicados = PublicarAlojamiento::select('publicar_alojamiento.*')
		->whereRaw("publicar_alojamiento.id NOT IN (SELECT res.idpublicado FROM reservas res)")
		->where('publicar_alojamiento.fecha_inicio', '<=', $dbDesde)
		->where('publicar_alojamiento.fecha_fin', '>=', $dbHasta)
		->union($publicadosReservados)
		->distinct()
		->get();

		//dd($publicados);
       	
		$ciudad = $request->get('city');
		$room = $request->get('room');

		$p= count($publicados);
		$params['publicados'] = $publicados;				
		$fotos= App\Fotos::all();
        $params['fotos'] = $fotos;
		$params ['fecha'] = $fecha;
		$params ['p'] = $p;
		$params['ciudad']=$ciudad;
		$params['dbDesde']=$dbDesde;
		$params['dbHasta']=$dbHasta;
		$params['room']=$room;

		//dd($publicados);
        
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


		$fechahoy = Carbon::now();
		$fechaEntrada = $desde;

		$diasDiferencia = $fechahoy->diffInDays($fechaEntrada);
		
		
			$reservaNueva = new App\Reserva;
			$reservaNueva->iduser = $prueba;
			$reservaNueva->idpublicado= $request->get('id');
			$reservaNueva->fecha_entrada= $desde;
			$reservaNueva->fecha_salida= $hasta;
			$reservaNueva->precio_total=$precio;

			if($diasDiferencia <= 2)
			{
				$reservaNueva->bandera=4;
			}	
			else{
				$reservaNueva->bandera=0;
			}
			
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
