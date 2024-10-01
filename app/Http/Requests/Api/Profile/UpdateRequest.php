<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user' => 'required|string',
            'description' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|integer',
            'gender' => 'nullable|integer',
            'birthed_at' => 'nullable|date_format:Y-m-d',
        ];
    }
}
