<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeroesRequest extends FormRequest
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
            'nombre_heroe' => 'required|unique:heroes',
            'password' => 'required|max:10',
            'año_inicio' => 'required',
            'nivel' => 'required'
        ];
    }

    public function messages(): array
    {
        return[
            'nombre_heroe.required' => 'El campo es obligatorio',
            'password' => 'El password es obligatorio',
            'año_inicio' => 'El año es obligatorio',
            'nivel' => 'El nivel es obligatorio'
        ];
    }
}
