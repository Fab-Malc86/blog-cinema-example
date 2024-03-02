<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'category_id' => 'required|max:50',
            'description' => 'required|max:250',
            'body' => 'required|max:5000',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo Titolo è obbligatorio',
            'title.max' => 'Il campo Titolo non può essere più lungo di :max caratteri',

            'category_id.required' => 'Il campo Category è obbligatorio',
            'category_id.max' => 'Il campo Category non può essere più lungo di :max caratteri',

            'description.required' => 'Il campo Description è obbligatorio',
            'description.max' => 'Il campo Description non può essere più lungo di :max caratteri',

            'body.required' => 'Il campo Body è obbligatorio',
            'body.max' => 'Il campo Body non può essere più lungo di :max caratteri',

            'image.required' => 'L\' inserimento dell\' immagine è obbligatorio',
        ];
    }
}
