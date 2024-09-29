<?php

namespace App\Service;

use App\Models\Comment;

class CommentService
{
    public static function create(array $data): Comment
    {
        return Comment::create($data);
    }
}
