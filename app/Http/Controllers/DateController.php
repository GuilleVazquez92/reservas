<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DateController extends Controller
{
     function showDate(Request $request)
    {
 		echo ($request->input ('date'));
       dd($request->input ('date2'));
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
		

			return view('Admin.regimenes',$params)->with('alojamientos',$prueba);
	}
}
