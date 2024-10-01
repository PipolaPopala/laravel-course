<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => $this->user,
            'avatar' => $this->avatar,
            'description' => $this->description,
            'address' => $this->address,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'birthed_at' => $this->birthed_at,
        ];
    }
}
