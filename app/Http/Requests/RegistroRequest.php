<?php

namespace sistema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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

        
        'cedula' => 'required|unique:representante',
        'nombre1' => 'min:4|max:60|required',
        'nombre2' => 'min:4|max:60|required',
        'apellido1'=> 'min:4|max:60|required',
        'apellido2'=> 'min:4|max:60|required',
        'profesion'=> 'min:4|max:60|required', 
        'cargo' => 'min:4|max:60|required',
        'nro_cuenta'=> 'min:20|required',
        'tipo_cuenta' => 'min:5|max:20',
        'correo' => 'min:4|max:60|required|unique:email',

        'cedulab' => 'required|unique:becados',
        'nombre1b' => 'min:4|max:60|required',
        'nombre2b' => 'min:4|max:60|required',
        'apellido1b'=> 'min:4|max:60|required',
        'apellido2b'=> 'min:4|max:60|required'
        

        
        ];
    }
}
