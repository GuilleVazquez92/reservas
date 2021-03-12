<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Carbon\Carbon;

class ValidarPublicarRequest extends FormRequest
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

        $date = Carbon::now();
        $date = $date->format('d-m-Y');
        return [

        'idalojamiento'         => 'required',
        'idhabitacion'          => 'required', 
        'idregimen'             => 'required',
        'fecha_inicio'          => 'required|after_or_equal:'.$date,
        'fecha_fin'             => 'required|after_or_equal:fecha_inicio',
        ];

    }

    public function messages()
    {
      return [

        'idalojamiento.required'    => 'El :attribute es obligatorio.',
        'idhabitacion.required'     => 'La :attribute es obligatorio.',
        'idregimen.required'        => 'El :attribute es obligatorio.',
        'fecha_inicio.required'     => 'La :attribute es obligatorio.',
        'fecha_fin.required'        => 'La :attribute es obligatorio.',         
      ];
    }

    public function attributes()
    {
      return [
        'idalojamiento'         => 'Alojamiento',
        'idhabitacion'          => 'Habitación',
        'idregimen'             => 'Regimen',
        'fecha_inicio'          => 'Fecha de Inicio',
        'fecha_fin'             => 'Fecha Final',
          
      ];
  }
}
