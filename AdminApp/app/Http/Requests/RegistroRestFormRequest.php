<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistroRestFormRequest extends Request
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
            'nombreadmin'=>'required|max:45',
            'telefono'=>'required|max:15',
            'nocuenta'=>'required|max:45',
            'usuario'=>'required|max:16',
            'password'=>'required|max:16',
            'nombrerest'=>'required|max:40',
            'domiciliorest'=>'max:80';
        ];
    }
}
