<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'short_desc' => 'required|string|max:255',
            'long_desc' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_id'=> 'required|array|exists:tags,id',
        ];
    }
// public function failedValidation(Validator $validator)
//     {
//         dd($validator);
//     }
}
