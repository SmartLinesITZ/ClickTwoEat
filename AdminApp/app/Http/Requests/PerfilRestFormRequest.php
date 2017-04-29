<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PerfilRestFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'descripcion'=>'required|max:855',
            'domicilio'=>'required|max:60',
            'telefono'=>'required|max:15',
            'horarios'=>'required|max:65',
            'logo'=>'max:85',
            'slogan'=>'required|max:125'
        ];
    }
}
