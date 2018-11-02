<?php

namespace ClubNautico\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pruebaRequest extends FormRequest
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

            'Amarre'      => 'required',
            'Embarcacion' => 'required',
            'Empleados'   => 'required',
            'Pertenece'   => 'required',
            'Propietario' => 'required',
            'Socio'       => 'required',
            'Zonas'       => 'required'
        ];
    }

      public function messages()
    {
        return [
            
            'Amarre.required' =>  'Ingresar Amarre es obligatorio',
            'Embarcacion.required' =>  'Ingresar la Embarcacion es obligatorio',
            'Empleados.required' =>  'el empleado es un campo obligatorio',
            'Pertenece.required' =>  'identificar a quien pertenece es obligatorio',
            'Propietario.required' =>  'Identificar al Propietario es obligatorio',
            'Socio.email' =>  'El Socio es obligatorio',
            'Zonas.required' =>  'Debe identificar la Zona',
               ];
    }

}
