<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePqrsd extends FormRequest
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
            'esAnonima'=>'required',
            'tipoPqrsd'=>'required',
            'tipoPersona'=>'required',
            'correoElectronico'=>'required',
            'descripcion'=>'required|min:10',
            'urlPdf'=> 'required|mimes:pdf|max:2048',
        ];
    }
    public function attributes()
    {
        return [
            'tipoPersona'=>'persona',
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required'=>'Debe ingresar una descripcion de la Pqrsd
            '
        ];
    }

}
