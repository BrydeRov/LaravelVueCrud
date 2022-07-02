<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'excerpt' => 'required|string|max:500|unique:notes',
            'content' => 'required|string|max:1000000',
        ];
    }
}