<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'tag_id' => 'required|array|min:2'
        ];
    }

    public function messages(): array
    {
        return [
            'body.required' => 'El body es requerido',
            'title.required' => 'El titulo es requerido', 
            "tag_id.required" => "Minimo una etiqueta"
        ];
    }
}
