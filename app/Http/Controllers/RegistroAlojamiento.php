<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\UserPorAlojamiento;
use App\PublicarAlojamiento;
use App\Alojamiento;
use App\User;
use App\TipoHabitacion;
use App;
use DB;
use App\Http\Requests\ValidarRegistroRequest;

class RegistroAlojamiento extends Controller
{
    public function mostrar()
	{
	
		$ciudades= App\Ciudad::all();
		$paises= App\Pais::all();
		$departamentos= App\Departamento::all();
		$tipos= App\TipoAlojamiento::all();

		$params['ciudades'] = $ciudades;
		$params['paises'] = $paises;
		$params['tipos'] = $tipos;
		$params['departamentos'] = $departamentos;

		return view ('Admin.Alojamientos.registrar',$params);

	}

	public function cargarAlojamiento(ValidarRegistroRequest $request)
	{
		
		$ciudades= App\Ciudad::all();
		$paises= App\Pais::all();
		$departamentos= App\Departamento::all();
		$tipos= App\TipoAlojamiento::all();

		$params['ciudades'] = $ciudades;
		$params['paises'] = $paises;
		$params['tipos'] = $tipos;
		$params['departamentos'] = $departamentos;


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
			$alojamientonuevo->lng= $request->get('longitud');
			$alojamientonuevo->save();

			UserPorAlojamiento::create([
				'iduser' => \Auth::id(),
				'idalojamiento' => $alojamientonuevo->id
			]);

			

			$celularnuevo = new App\TelefonoAlojamiento;
			$celularnuevo->idalojamiento= $alojamientonuevo->id;
			$celularnuevo->telefono= $request->get('celular');
			$celularnuevo->save();

			DB::commit();

		} catch (\Exception $e) {
			DB::rollback();
			\Log::error($e);
		}
		
	
		return view ('Admin.Alojamientos.registrar',$params);
	}
	


	public function  edit(Request $request)

	{
		$ciudades= App\Ciudad::all();
		$tipos= App\TipoAlojamiento::all();

		$params['ciudades'] = $ciudades;
		$params['tipos'] = $tipos;
		
		$id= $request->get('id');

		

		$alojamiento = Alojamiento::select('alojamientos.*')
		->whereRaw("alojamientos.id NOT IN (SELECT pub.idalojamiento FROM publicar_alojamiento pub)")
		->where('alojamientos.id', '=', $id)
		->get();

        
        $params['alojamiento'] = $alojamiento;
        

		return view ('Admin.editAlojamiento',$params) ;
	}

public function  editar(ValidarRegistroRequest $request)

	{
		
		$id = $request->get('id');
        $alojamientonuevo = Alojamiento::find($id);
        $alojamientonuevo->idciudad= $request->get('idciudad');
		$alojamientonuevo->idtipoalojamiento= $request->get('idtipo');
		$alojamientonuevo->nombre= $request->get('nombre');
		$alojamientonuevo->descripcion= $request->get('descripcion');
		$alojamientonuevo->email= $request->get('correo');
		$alojamientonuevo->direccion= $request->get('direccion');
		$alojamientonuevo->referencia= $request->get('referencia');
		$alojamientonuevo->categoria= $request->get('categoria');
		$alojamientonuevo->lat= $request->get('latitud');
		$alojamientonuevo->lng= $request->get('longitud');
		$alojamientonuevo->save();


		$user = \Auth::user()->id;
		$alojamientos = Alojamiento::select('alojamientos.*')
		->join('user_x_alojamiento', 'user_x_alojamiento.idalojamiento', '=', 'alojamientos.id')
        ->where('user_x_alojamiento.iduser', '=',$user )

         ->get();

         
		//dd($alojamiento);

		$params['alojamientos'] = $alojamientos;
		$ciudades= App\Ciudad::all();
		$paises= App\Pais::all();
		$departamentos= App\Departamento::all();
		$tipos= App\TipoAlojamiento::all();

		$params['ciudades'] = $ciudades;
		$params['paises'] = $paises;
		$params['tipos'] = $tipos;
		$params['departamentos'] = $departamentos;
       
        return view('Admin.Alojamientos.editar',$params);


	}





	public function  mostrarAlojamiento()
	{
		$user = \Auth::user()->id;


		$alojamientos = Alojamiento::select('alojamientos.*')
		->join('user_x_alojamiento', 'user_x_alojamiento.idalojamiento', '=', 'alojamientos.id')
        ->where('user_x_alojamiento.iduser', '=',$user )

         ->get();

         
		//dd($alojamiento);

		$params['alojamientos'] = $alojamientos;
		$ciudades= App\Ciudad::all();
		$paises= App\Pais::all();
		$departamentos= App\Departamento::all();
		$tipos= App\TipoAlojamiento::all();

		$params['ciudades'] = $ciudades;
		$params['paises'] = $paises;
		$params['tipos'] = $tipos;
		$params['departamentos'] = $departamentos;	

		return view('Admin.Alojamientos.editar',$params);
	}


	public function  eliminar(Request $request)

	{
				
		$id= $request->get('id');


		$alojamiento = Alojamiento::select('alojamientos.*')
		->whereRaw("alojamientos.id NOT IN (SELECT pub.idalojamiento FROM publicar_alojamiento pub)")
		->where('alojamientos.id', '=', $id)
		->first();
		
		
       if($alojamiento == null){

      	$user = \Auth::user()->id;


		$alojamientos = Alojamiento::select('alojamientos.*')
		->join('user_x_alojamiento', 'user_x_alojamiento.idalojamiento', '=', 'alojamientos.id')
        ->where('user_x_alojamiento.iduser', '=',$user )

         ->get();
         $params['alojamientos'] = $alojamientos;
         return view('Admin.Alojamientos.editar',$params);
       		
       	}else
       	{
       		if($alojamiento->imagenes == null)
       		{
			
			$alojamiento->telefonos->delete();
			$alojamiento->user->delete();
			$alojamiento->delete();
       		}else{
       		$alojamiento->imagenes->delete();
       		$alojamiento->telefonos->delete();
			$alojamiento->user->delete();
			$alojamiento->delete();
       		}

       			$user = \Auth::user()->id;


		$alojamientos = Alojamiento::select('alojamientos.*')
		->join('user_x_alojamiento', 'user_x_alojamiento.idalojamiento', '=', 'alojamientos.id')
        ->where('user_x_alojamiento.iduser', '=',$user )

         ->get();
         $params['alojamientos'] = $alojamientos;
         return view('Admin.Alojamientos.editar',$params);
       		}


	}

}
