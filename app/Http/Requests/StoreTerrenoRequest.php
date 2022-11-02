<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTerrenoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nomTer" =>  'required|max:45',
            "ciudadTer" => 'required|max:30',
            "descTer" => 'required|max:500',
            "extensionTer" => 'required',
            "terDispTer" => 'required',
            "tipTer" => 'required',
            "estTer" => 'required'
        ];
    }

    public function messages(){

        return [
            "required" =>  'Este campo es obligatorio',
            "nomTer.max" => 'El máximo de caracteres es 45',
            "ciudadTer.max" => 'El máximo de caracteres es 30',
            "descTer.max" => 'El máximo de caracteres es 500'
        ];
    }
}
