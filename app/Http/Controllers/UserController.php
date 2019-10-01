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


public function login()
{

    return view('login');
}

public function menuadmin()
{

    return view('menuadmin');
}

}
