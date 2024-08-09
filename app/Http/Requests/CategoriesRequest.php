<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
{
    // Autorizar la validacion de los formularios
    public function authorize(): bool
    {
        return true;
    }

    // Validaciones para las categorias
    public function rules(): array
    {
        return [
            "name"  => "required|max:255",
        ];
    }

    // Atributos para las validaciones
    public function attributes(): array 
    {
        return [
            "name" => "categoria",
        ];
    }

    // Mensaje que retornara la vista
    public function messages(): array
    {
        return [
            "name.required" => "La :attribute es obligatoria"
        ];
    }
}
