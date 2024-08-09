<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    // Autorizacion para la validacion de los formularios
    public function authorize(): bool
    {
        return true;
    }

    // Metodo para establecer las validaciones
    public function rules(): array
    {
        return [
            "name" => "required|nullable|max:255",
            "email" => "required|email|max:255|unique:users,email," . $this->input("id"),
            "password" => "required|max:255"
        ];
    }
    
    // Metodo para declarar los atributos de los campos
    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'email' => 'correo electronico',
            'password' => 'contraseña'
        ];
    }

    // Metodo para los mensajes de las validaciones
    public function messages(): array
    {
        return [
            'name.required' => 'El :attribute es requerido',
            'email.required' => 'El :attribute es requerido',
            'password.required' => 'La :attribute es requerida'
        ];
    }

}
