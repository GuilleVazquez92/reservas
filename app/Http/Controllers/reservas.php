<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicarAlojamiento;
use App\Ciudad;
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
		$city = Ciudad::select('ciudades.*')
		->where('ciudades.id', '=', $ciudad)
		->first();

	

		$room = $request->get('room');

		$p= count($publicados);
		$params['city'] = $city->descripcion;
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

	    	public function filtros(Request $request)

	{
		$city = $request->get('ciudad');
		$dbDesde = $request->get('dbDesde');
		$dbHasta = $request->get('dbHasta');
		$ciudad = $request->get('city');

		$desayuno = $request->get('desayuno');
		$media = $request->get('media');
		$all = $request->get('all');
		$sin = $request->get('sin');
		$americano = $request->get('a');

		$unostar= $request->get('1star');
		$dosstar= $request->get('2star');
		$tresstar= $request->get('3star');
		$cuatrostar= $request->get('4star');
		$cincostar= $request->get('5star');

		$publicadosReservados = PublicarAlojamiento::join('reservas', function($join) {
			$join->on('publicar_alojamiento.id','=','reservas.idpublicado');
		})
		->select('publicar_alojamiento.*')
		->where('reservas.fecha_salida', '<=', $dbDesde)
		->where('reservas.fecha_salida', '<=', $dbHasta)
		->where('publicar_alojamiento.fecha_inicio', '<=', $dbDesde)
		->where('publicar_alojamiento.fecha_fin', '>=', $dbHasta);

		$publicado = PublicarAlojamiento::select('publicar_alojamiento.*')
		->whereRaw("publicar_alojamiento.id NOT IN (SELECT res.idpublicado FROM reservas res)")
		->where('publicar_alojamiento.fecha_inicio', '<=', $dbDesde)
		->where('publicar_alojamiento.fecha_fin', '>=', $dbHasta)
		->union($publicadosReservados)
		->distinct()
		->get();

		foreach ($publicado as $key => $publi) {
			
			if ($publi->regimen->idtipo ==$desayuno) {


				$publicados = $publi;
			}

			if ($publi->regimen->idtipo ==$media) {

				$publicados = $publi;

			}
			if ($publi->regimen->idtipo ==$all) {

				$publicados = $publi;
				
			}
				if ($publi->regimen->idtipo ==$sin) {

				$publicados = $publi;
				
			}
				if ($publi->regimen->idtipo ==$americano) {

				$publicados = $publi;
				
			}

			if (isset($publicados) == false) {

				$publicados = $publi;
				
			}

		}

		$formatted_dt1=Carbon::parse($request->get('dbDesde'));
		$formatted_dt2=Carbon::parse($request->get('dbhasta'));
		$fecha=$formatted_dt1->diffInDays($formatted_dt2);

		$room = $request->get('room');

	
		$este['publicados'] = $publicados;
		$params['publicados'] = $este;				
		$fotos= App\Fotos::all();
        $params['fotos'] = $fotos;
		$params ['fecha'] = $fecha;
		$params['ciudad']=$city;
		$params['city'] = $ciudad;	
		$params['dbDesde']=$dbDesde;
		$params['dbHasta']=$dbHasta;
		$params['room']=$room;


		//dd($publicados);
		//echo $publicado;

		return view('alojamientos.busqueda',$params);
				
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
