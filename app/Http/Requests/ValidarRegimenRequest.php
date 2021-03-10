<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarRegimenRequest extends FormRequest
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
        'idtiporegimen'        => 'required',
        'descripcion'        => 'required', 
        'precio'        => 'required||Integer|Min:1|Max:500',
         
        ];
    }

           public function messages()
    {
      return [
        'idtiporegimen.required'   => 'El :attribute es obligatorio.',
        'precio.required'    => 'El :attribute es obligatorio.',
        'precio.numeric'    => 'El :attribute debe ser numerico.',
        'descripcion.required'    => 'La :attribute es obligatorio.',
       
      ];
    }

    public function attributes()
    {
      return [
        'idtiporegimen'        => 'tipo de regimen',
        'precio'         => 'precio',
        'descripcion'  => 'descripcion',
        
               
      ];
}

}
