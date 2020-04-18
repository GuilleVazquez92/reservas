<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPorAlojamiento;
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
			$alojamientonuevo->lat= $request->get('longitud');
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


		return view('alojamientos.contacto');
		
	}

	public function admin()
	{

		return view('menuadmin'); 
	}

}
