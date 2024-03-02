<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'required|max:150',
            'category' => 'required|max:50',
            'trama' => 'required|max:5000',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo Titolo è obbligatorio',
            'title.max' => 'Il campo Titolo non può essere più lungo di :max caratteri',

            'category.required' => 'Il campo Categoria è obbligatorio',
            'category.max' => 'Il campo Categoria non può essere più lungo di :max caratteri',

            'trama.required' => 'Il campo Trama è obbligatorio',
            'trama.max' => 'Il campo Trama non può essere più lungo di :max caratteri',

            'image.required' => 'L\' inserimento dell\' immagine è obbligatorio',
        ];
    }
}
