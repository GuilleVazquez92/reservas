<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Pais;

class UserController extends Controller
{
    public function aero()
    {

        $datos= App\aerolinea::all();
        return view('Aerolineas', compact('datos'));
    }

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

public function login()
{

    return view('login');
}

public function menuadmin()
{

    return view('menuadmin');
}

}
