<?php

namespace App\Http\Requests\Api\Comment;

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
            'author' => 'required|string',
            'post_id' => 'required|integer',
            'content' => 'required|string',
            'status' => 'nullable|integer',
            'like' => 'required|integer',
            'parent_id' => 'required|integer',
        ];
    }
}

