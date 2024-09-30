<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Service\CommentService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    //
    public function index()
    {
        return Comment::all();
    }

    public function show(Comment $comment)
    {
        return $comment;
    }

    public function store()
    {
        $data = [
            'post_id' => 5,
            'content' => 'my content',
            'author' => 'IVAN',
            'like' => 50,
            'parent_id' => 15
        ];
        $comment = CommentService::create($data);
        return $comment;
    }

    public function update(Comment $comment)
    {
        $comment->update(['content' => 'new content']);
        return $comment;
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return responce([
            'message' => 'delete success'
        ], Response::HTTP_OK);
    }
}
