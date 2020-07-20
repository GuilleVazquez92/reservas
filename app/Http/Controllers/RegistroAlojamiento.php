<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPorAlojamiento;
use App\TelefonoUser;
use App;
use DB;

class RegistroAlojamiento extends Controller
{
    public function mostrar()
	{
		
		return view ('Admin.Alojamientos.registrar');
	}
	
}
