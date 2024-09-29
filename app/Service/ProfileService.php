<?php

namespace App\Service;

use App\Models\Profile;

class ProfileService
{
    public static function create(array $data): Profile
    {
        return Profile::create($data);
    }
}
