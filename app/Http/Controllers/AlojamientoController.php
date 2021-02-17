<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\UserPorAlojamiento;
use App\Reserva;
use App\PublicarAlojamiento;
use App\User;
use App\TipoHabitacion;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App;
use DB;
class AlojamientoController extends Controller
{
	

	public function admin()
	{

		return view('menuadmin'); 
	}
//--------------REGIMENES----------------------------------------------
	public function regimenes()
	{

		$regimenes= App\Regimen::all();
		$tipo_regimenes = App\TipoRegimen::all();
		
		
		
		$prueba = \Auth::user()->id;

		$params['regimenes'] = $regimenes;
		$params['prueba'] = $prueba;
		$params['tipo_regimenes'] = $tipo_regimenes;
		
		return view('Admin.regimenes',$params)->with('alojamientos',$prueba); 
	}
	
	public function cargarRegimenes(Request $request)
	{
			$prueba = \Auth::user();
			$prueb = \Auth::user()->id;

			$regimennuevo = new App\Regimen;
			$regimennuevo->iduser= $prueba->id ;
			$regimennuevo->idtipo= $request->get('idtiporegimen');
			$regimennuevo->descripcion= $request->get('descripcion');
			$regimennuevo->precio= $request->get('precio');
			$regimennuevo->save();
		
			

			$regimenes= App\Regimen::all();
			$tipo_regimenes = App\TipoRegimen::all();
			$params['regimenes'] = $regimenes;
			$params['tipo_regimenes'] = $tipo_regimenes;
			$params['prueba'] = $prueb;
		

			return view('Admin.regimenes',$params)->with('alojamientos',$prueba);
	}



 //-----------------INFORMACION PRINCIPAL------------------------------
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function info()
	{
			$alojamientos= \Auth::user()->alojamientos;
			$p= count($alojamientos);
			$params['p']=$p;

			$user= \Auth::user()->id;

			$habi =  App\Habitacion::all();
			$regi = App\Regimen::all();

			$c= 0;
			$re = 0 ;

			foreach ($habi as $key => $h) {
				
				if ($h->idusers == $user) {
					$c = $c+1;
				}
				

			}
			foreach ($regi as $key => $r) {
				
				if ($r->iduser == $user) {
					$re = $re+1;
				}
				

			}



			$params['habi'] = $habi;
			$params['alojamientos'] = $alojamientos;
			$params['c'] = $c;
			$params['re'] = $re;
			$prueba = \Auth::user();
			if ( !empty($prueba) ) {
					
			
			$reserva = Reserva::select('reservas.*')
                ->join('publicar_alojamiento', 'reservas.idpublicado', '=', 'publicar_alojamiento.id')
                ->where('publicar_alojamiento.iduser', '=',$prueba->id )
                ->get();

    
			
			$params['reserva']=$reserva;
			
			//return $params;
			return view('Admin.info',$params);

			}else {
					
				
			echo 'No ha iniciado sesion';
			}


			
	}


  // ---------------HABITACIONES-----------------------------------------
	public function habitaciones()
	{

		$prueba = \Auth::user();
		$prueb = \Auth::user()->id;
		$alojamientos= App\Alojamiento::all();
		$tipoHabitaciones= App\TipoHabitacion::all();
		$habitaciones= App\Habitacion::all();

		$params['alojamientos'] = $alojamientos;
		$params['tipo_habitacion'] = $tipoHabitaciones;
		$params['habitaciones'] = $habitaciones;
		$params['prueb'] = $prueb;

		
		
		

		return view('Admin.habitaciones',$params)->with('alojamientos',$prueba); 
	}

		public function cargar_habitaciones(Request $request)
	{
			$prueba = \Auth::user();
			$prueb = \Auth::user()->id;

			$habitacionnueva = new App\Habitacion;
			$habitacionnueva->idusers= $prueba->id;
			$habitacionnueva->idtipo= $request->get('idtipohabitacion');
			$habitacionnueva->cant_camas= $request->get('cant_camas');
			$habitacionnueva->precio= $request->get('precio');
			$habitacionnueva->descripcion= $request->get('descripcion');
			$habitacionnueva->save();
		 
		 	$alojamientos= App\Alojamiento::all();
			$tipoHabitaciones= App\TipoHabitacion::all();
			$habitaciones= App\Habitacion::all();

			$params['alojamientos'] = $alojamientos;
			$params['tipo_habitacion'] = $tipoHabitaciones;
			$params['habitaciones'] = $habitaciones;
			$params['prueb'] = $prueb;
			
		

		return view('Admin.habitaciones',$params)->with('alojamientos',$prueba); 
		
	}


 //-----------------------FOTOS-----------------------------------------------------------

	public function fotos()
	{

		$alojamientos= App\Alojamiento::all();
		$fotos= App\Fotos::all();
		$tipoHabitaciones= App\TipoHabitacion::all();
		$habitaciones= App\Habitacion::all();

		$params['alojamientos'] = $alojamientos;
		$params['fotos'] = $fotos;
		$params['tipo_habitacion'] = $tipoHabitaciones;
		$params['habitaciones'] = $habitaciones;
		$prueba = \Auth::user()->alojamientos;
		
		return view('Admin.fotos',$params)->with('alojamientos',$prueba);
	}
		

	public function cargarFotos(Request $request)
	{
		
		$alojamientos= App\Alojamiento::all();
		$fotos= App\Fotos::all();
		$tipoHabitaciones= App\TipoHabitacion::all();
		$habitaciones= App\Habitacion::all();

		$params['alojamientos'] = $alojamientos;
		$params['fotos'] = $fotos;
		$params['tipo_habitacion'] = $tipoHabitaciones;
		$params['habitaciones'] = $habitaciones;

		$file = Input::file('imagen');
		$random =  str_random(10);
		$nombre = $random.'-'.$file->getClientOriginalName('');
		$path = public_path('imagenes/'.$nombre);
		$url = '/imagenes/'.$nombre;
		$image = Image::make($file->getRealPath());
		$image->save($path);
		$image->encode('data-url');
		

		$imagennueva = new App\fotos;
		$imagennueva->idalojamiento= $request->get('idalojamiento');
		$imagennueva->codigo_imagen= $image;
		$imagennueva->orden= $request->get('orden');
		$imagennueva->path_imagen= $request->get('path');
		$imagennueva->save();

	
		$prueba = \Auth::user()->alojamientos;
		
		return view('Admin.fotos',$params)->with('alojamientos',$prueba); 
		
	}
	


  //-------------------------------------------------------------------------





	public function condiciones()
	{

		return view('Admin.condiciones'); 
	}
	public function pagos()
	{

		return view('Admin.pagos'); 
	}
}
