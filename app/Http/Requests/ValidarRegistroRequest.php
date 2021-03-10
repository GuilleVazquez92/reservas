<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarRegistroRequest extends FormRequest
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
        'nombre'        => 'required|min:1|max:30',
        'idciudad'    => 'required', 
        'direccion'    => 'required|min:1|max:50',
        'correo'         => 'required|email',
        'telefono'      => 'required',
        'celular'          => 'required',
        'referencia'          => 'required',
        'categoria'          => 'required',
            //
        ];
    }

    public function messages()
    {
      return [
        'nombre.required'   => 'El :attribute es obligatorio.',
        'nombre.min'        => 'El :attribute debe contener mas de una letra.',
        'nombre.max'        => 'El :attribute debe contener max 30 letras.',
        'idciudad.required'   => 'El :attribute es obligatorio.',
        'direccion.required'   => 'El :attribute es obligatorio.',
        'direccion.min'        => 'El :attribute debe contener mas de una letra.',
        'direccion.max'        => 'El :attribute debe contener max 30 letras.',

        'correo.required'    => 'El :attribute es obligatorio.',
        'correo.email'       => 'El :attribute debe ser un correo válido.',

        'telefono.required'    => 'El :attribute es obligatorio.',
        'celular.required'       => 'El :attribute es obligatorio.',

        'referencia.required'    => 'El :attribute es obligatorio.',
        'categoria.required'    => 'La :attribute es obligatoria.',


                
      ];
    }

    public function attributes()
    {
      return [
        'nombre'        => 'nombre',
        'direccion'    => 'direccion',
        'correo'         => 'correo electronico',
        'telefono'  => 'linea baja',
        'celular'         => 'celular',
        'referencia'          => 'Nombre del encargado',
        'idciudad'          => 'Ciudad',
        'categoria'          => 'categoria',

        
               
      ];
}
}
