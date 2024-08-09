<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'user_id' => 'required',
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255',
            'tag_id' => 'required|array|min:2'
        ];
    }

    // Metodo para declarar los atributos de los campos
    public function attributes(): array
    {
        return [
            'title' => 'titulo',
            'body' => 'cuerpo',
            'password' => 'contraseña'
        ];
    }

    // Metodo para los mensajes de las validaciones
    public function messages(): array
    {
        return [
            'body.required' => 'El :attribute es requerido',
            'title.required' => 'El :attribute es requerido', 
            "tag_id.required" => "Minimo una etiqueta"
        ];
    }
}
