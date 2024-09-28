<?php

namespace App\Service;

use App\Models\Post;

class PostService
{
    public static function create(array $data): Post
    {
        return Post::create($data);
    }
}
