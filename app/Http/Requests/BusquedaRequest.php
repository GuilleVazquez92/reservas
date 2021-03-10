<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Carbon\Carbon;

class BusquedaRequest extends FormRequest
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
        'city'        => 'required',
        'check-in'        => 'required|after_or_equal:'.$date,
        'check-out'        => 'required|after_or_equal:check-in',
            
        ];
    }

    public function messages()
    {
      return [
        'city.required'   => 'La :attribute es obligatoria.',
        'check-in.after:tomorrow'   => 'La :attribute debe ser valida.',
        'check-out.after_or_equal:check-in'   => 'La :attribute debe ser valida.',
      ];
    }

    public function attributes()
    {
      return [
        'city'        => 'Ciudad',
        'check-in'    => 'Fecha de salida',
        'check-out'         => 'Fecha de llegada',
               
      ];
}
}
