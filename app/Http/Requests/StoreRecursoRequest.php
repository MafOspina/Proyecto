<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecursoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "nomRec" => 'required|max:30',
            "descRec" => 'max:255',
            "tipRec" => 'required',
            "usoRec" => 'required',
            "cantRec" => 'required'
        ];
    }

    public function messages()
    {
        return [
            "required" => 'Este campo es obligatorio',
            "descRec.max" => 'El máximo de caracteres es de 255',
            "nomRec.max" => 'El máximo de caracteres es 30'
        ];
    }
}
