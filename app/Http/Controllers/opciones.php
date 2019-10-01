<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class opciones extends Controller
{
    public function mostrar()
	{

		return view('alojamientos/opciones');
	}
	public function mostrar_hoteles()
	{

		return view('alojamientos/tipo_opciones_hoteles');
	}
}
