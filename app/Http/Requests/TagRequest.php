<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|max:50|min:5|required'
        ];
    }

    public function messages()
    {
      return [
        'name.string' => 'Debe contener caracteres alfanumericos',
        'name.min' => 'Debe contener minimo 5 caracteres',
        'name.max' => 'Debe contener maximo 50 caractres',
        'name.required' => 'El nombre de la tag es obligatorio'
      ];
    }
}
