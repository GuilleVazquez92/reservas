<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
	public function paises()
	{
		$paises= App\Pais::all();
		$params['paises'] = $paises;
		return view('paisform',$params);
	}

	public function cargarpaises(Request $request)
	{
		$paisnuevo = new Pais;
		$paisnuevo->descripcion= $request->get('descripcion');
		$paisnuevo->save(); 
		
		return back();
	}
}