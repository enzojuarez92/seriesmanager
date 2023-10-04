<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieRequest extends FormRequest
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
            'titulo' => ['required'],
            'descripcion' => ['required', 'min:2', 'max:200'],
            'fecha_estreno' => ['required','date'],
            'estrellas' => ['required', 'numeric', 'between:1,5'],
            'genero' => ['required'],
            'precio_alquiler' => ['required', 'numeric'],
        ];
    }
}
