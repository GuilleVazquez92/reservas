<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App;
use App\Pais;

class UserController extends Controller
{
    public function pagos()
    {

        	$prueba = \Auth::user();
			if ( !empty($prueba) ) {
					
			
			$reserva = Reserva::where('iduser', '=',$prueba->id)
						->get();
			

			
			$params['reserva']=$reserva;
			
			//return $params;
			return view('UserAdmin.pagar',$params);

			}else {
					
				
			echo 'No ha iniciado sesion';
			}

    }


public function info()
{

    return view('UserAdmin.info');
}

public function reservas(Request $request)
{
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
