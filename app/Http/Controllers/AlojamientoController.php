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
class AlojamientoController extends Controller
{
	public function aloja()
	{
		$ciudades= App\Ciudad::all();
		$paises= App\Pais::all();
		$departamentos= App\Departamento::all();
		$tipos= App\TipoAlojamiento::all();

		$params['ciudades'] = $ciudades;
		$params['paises'] = $paises;
		$params['tipos'] = $tipos;
		$params['departamentos'] = $departamentos;

		return view('alojamientoform', $params);

	}

	public function cargarAlojamiento(Request $request)
	{
		try {
			DB::beginTransaction();

		    $alojamientonuevo = new App\Alojamiento;
			$alojamientonuevo->idciudad= $request->get('idciudad');
			$alojamientonuevo->idtipoalojamiento= $request->get('idtipo');
			$alojamientonuevo->nombre= $request->get('nombre');
			$alojamientonuevo->descripcion= $request->get('descripcion');
			$alojamientonuevo->email= $request->get('correo');
			$alojamientonuevo->direccion= $request->get('direccion');
			$alojamientonuevo->referencia= $request->get('referencia');
			$alojamientonuevo->categoria= $request->get('categoria');
			$alojamientonuevo->lat= $request->get('latitud');
			$alojamientonuevo->lng= $request->get('longitud');
			$alojamientonuevo->save();

			UserPorAlojamiento::create([
				'iduser' => \Auth::id(),
				'idalojamiento' => $alojamientonuevo->id
			]);

			$telefononuevo = new App\TelefonoAlojamiento;
			$telefononuevo->idalojamiento= $alojamientonuevo->id;
			$telefononuevo->telefono= $request->get('telefono');
			$telefononuevo->save();
			

			$celularnuevo = new App\TelefonoAlojamiento;
			$celularnuevo->idalojamiento= $alojamientonuevo->id;
			$celularnuevo->telefono= $request->get('celular');
			$celularnuevo->save();

			DB::commit();

		} catch (\Exception $e) {
			DB::rollback();
			\Log::error($e);
		}


		return view('alojamientos.info');
		
	}

	public function admin()
	{

		return view('menuadmin'); 
	}
//--------------REGIMENES----------------------------------------------
	public function regimenes()
	{

		$alojamientos= App\Alojamiento::all();
		$regimenes= App\Regimen::all();
		$params['alojamientos'] = $alojamientos;
		$params['regimenes'] = $regimenes;
		
		$prueba = \Auth::user()->alojamientos;
		

		return view('admin.regimenes',$params)->with('alojamientos',$prueba); 
	}
	
	public function cargarRegimenes(Request $request)
	{
			$regimennuevo = new App\Regimen;
			$regimennuevo->idalojamiento= $request->get('idalojamiento');
			$regimennuevo->descripcion= $request->get('descripcion');
			$regimennuevo->precio= $request->get('precio');
			$regimennuevo->save();
		
			$alojamientos= App\Alojamiento::all();
			$regimenes= App\Regimen::all();
			$params['alojamientos'] = $alojamientos;
			$params['regimenes'] = $regimenes;
		
			$prueba = \Auth::user()->alojamientos;
		

			return view('admin.regimenes',$params)->with('alojamientos',$prueba);
	}



 //-----------------INFORMACION PRINCIPAL------------------------------

	public function info()
	{
			return view('Admin.info');
	}


  // ---------------HABITACIONES-----------------------------------------
	public function habitaciones()
	{
		$alojamientos= App\Alojamiento::all();
		$tipoHabitaciones= App\TipoHabitacion::all();
		$habitaciones= App\Habitacion::all();

		$params['alojamientos'] = $alojamientos;
		$params['tipo_habitacion'] = $tipoHabitaciones;
		$params['habitaciones'] = $habitaciones;

		
		$prueba = \Auth::user()->alojamientos;
		

		return view('admin.habitaciones',$params)->with('alojamientos',$prueba); 
	}
		public function cargar_habitaciones(Request $request)
	{
			$habitacionnueva = new App\Habitacion;
			$habitacionnueva->idalojamiento= $request->get('idalojamiento');
			$habitacionnueva->idtipo= $request->get('idtipohabitacion');
			$habitacionnueva->cant_camas= $request->get('cant_camas');
			$habitacionnueva->precio= $request->get('precio');
			$habitacionnueva->save();
		 
		 	$alojamientos= App\Alojamiento::all();
			$tipoHabitaciones= App\TipoHabitacion::all();
			$habitaciones= App\Habitacion::all();

			$params['alojamientos'] = $alojamientos;
			$params['tipo_habitacion'] = $tipoHabitaciones;
			$params['habitaciones'] = $habitaciones;
			
			$prueba = \Auth::user()->alojamientos;
		

		return view('admin.habitaciones',$params)->with('alojamientos',$prueba); 
		
	}


 //-----------------------FOTOS-----------------------------------------------------------

	public function fotos()
	{

		$alojamientos= App\Alojamiento::all();
		$fotos= App\Fotos::all();
		$params['alojamientos'] = $alojamientos;
		$params['fotos'] = $fotos;


		$prueba = \Auth::user()->alojamientos;
		
		return view('Admin.fotos',$params)->with('alojamientos',$prueba);
	}
		

	public function cargarFotos(Request $request)
	{
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

		$alojamientos= App\Alojamiento::all();
		$fotos= App\Fotos::all();
		$params['alojamientos'] = $alojamientos;
		$params['fotos'] = $fotos;


		$prueba = \Auth::user()->alojamientos;
		
		return view('Admin.fotos',$params)->with('alojamientos',$prueba); 
		
	}
	


  //-------------------------------------------------------------------------





	public function condiciones()
	{

		return view('admin.condiciones'); 
	}
	public function pagos()
	{

		return view('admin.pagos'); 
	}
}
