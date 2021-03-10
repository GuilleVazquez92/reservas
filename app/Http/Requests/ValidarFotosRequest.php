<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFotosRequest extends FormRequest
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
        'idalojamiento'        => 'required',
        'orden'        => 'required||Integer|Min:1|Max:500',
        'path'        => 'required',
        'imagen'        => 'required',   
            

            //
        ];
    }

       public function messages()
    {
      return [
        'idalojamiento.required'   => 'El :attribute es obligatorio.',
        'orden.required'   => 'La :attribute es obligatorio.',
        'path.required'    => 'El :attribute es obligatorio.',
        'imagen.required'    => 'La :attribute es obligatorio.',
       
      ];
    }

    public function attributes()
    {
      return [
        'idalojamiento'        => 'Alojamiento',
        'orden'    => 'orden',
        'path'         => 'nombre',
        'imagen'  => 'imagen',
        
               
      ];
}
}
