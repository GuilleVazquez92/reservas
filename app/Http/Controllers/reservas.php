<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app;
class reservas extends Controller
{

	public function mostrar()
	{

		return view('reservas/reservas');

	}
}
