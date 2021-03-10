<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarHabitacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'idtipohabitacion'        => 'required',
        'cant_camas'        => 'required',
        'precio'        => 'required|Integer|Min:1|Max:500',
        'descripcion'        => 'required',   
            

            //
        ];
    }

       public function messages()
    {
      return [
        'idtipohabitacion.required'   => 'El :attribute es obligatorio.',
        'cant_camas.required'   => 'La :attribute es obligatorio.',
        'precio.required'    => 'El :attribute es obligatorio.',
        'precio.numeric'    => 'El :attribute debe ser numerico.',
        'descripcion.required'    => 'La :attribute es obligatorio.',
       
      ];
    }

    public function attributes()
    {
      return [
        'idtipohabitacion'        => 'tipo de habitacion',
        'cant_camas'    => 'cantidad de camas',
        'precio'         => 'precio',
        'descripcion'  => 'descripcion',
        
               
      ];
}
}
