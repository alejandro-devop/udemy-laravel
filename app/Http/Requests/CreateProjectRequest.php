<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'slug' => [
                'required',
                Rule::unique('projects')->ignore( $this->route('project') ),
            ],
            'image' => [
                'required',
                'mimes:jpeg,png,jpg',
                // 'size:2000', # Kb
                // 'max:2000',  # Kb
                // 'dimensions:ratio=16/9'
                // 'dimensions:min_width=400,min_height=400'
                // 'dimensions:width=600,height=400'
                // 'image' To validdate only images
            ],
            'description' => 'required'
        ];
    }
}
