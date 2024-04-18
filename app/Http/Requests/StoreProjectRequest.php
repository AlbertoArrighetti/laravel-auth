<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'nullable|max:2000',
            'thumb' => 'nullable|max:2000',
            'url' => 'required|max:2000',
            'programs' => 'required|max:200'
        ];
    }
    public function messages(): array
    {
        return [
            'required' => 'Il campo: :attribute deve essere inserito per proseguire.',
            'max' => 'Il campo: :attribute deve contenere massimo :max caratteri.',
        ];
    }
    public function attributes(): array
    {
        return [
            'title' => 'Titolo',
            'description' => 'Descrizione',
            'thumb' => 'Thumb',
            'url' => 'URL',
            'programs' => 'Programmi',
        ];
    }
}
