<?php

namespace App\Http\Requests\Api\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'content' => 'nullable|string',
            'author' => 'required|string',
            'like' => 'required|integer',
            'views' => 'required|integer',
            'category' => 'required|string',
            'tag' => 'required|string',
            'published_at' => 'required|date_format:Y-m-d',
        ];
    }
}
