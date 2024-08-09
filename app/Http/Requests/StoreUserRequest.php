<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name"                => "required|max:255",
            "email"                => "required|email|confirmed|unique:users|max:255",
            "password"            => "required|confirmed|max:255"
        ];
    }


    public function attributes(): array
    {
        return [
            'name'                => 'nombre',
            'email'                => 'correo',
            'password'            => 'contraseña',
        ];
    }

    public function messages(): array
    {
        return [
        'name.required'               => 'El :attribute es requerido',
        'name.max'                    => 'El :attribute es de máximo 255 carácteres',  
        'email.required'               => 'El :attribute es requerido',
        'email.max'                    => 'El :attribute es de máximo 255 carácteres',
        'email.email'                  => 'Ingrese un formato de :attribute válido',
        'password.required'           => 'La :attribute es requerido',
        'password.max'                    => 'La :attribute es de máximo 255 carácteres',
        ];
    }

}
