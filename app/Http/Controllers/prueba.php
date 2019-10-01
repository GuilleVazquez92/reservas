<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class prueba extends Controller
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

		return view('fotos', $params);

	}

	public function cargarAlojamiento(Request $request)
	{
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
		return back();

	}
}
