<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Comment\StoreRequest;
use App\Http\Requests\Api\Comment\UpdateRequest;
use App\Http\Resources\Comment\CommentResource;
use App\Models\Comment;
use App\Service\CommentService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function index()
    {
        return CommentResource::collection(Comment::all())->resolve();
    }

    public function show(Comment $comment)
    {
        return CommentResource::make($comment)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $comment = CommentService::create($data);
        return $comment;
    }

    public function update(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return $comment;
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response([
            'message' => 'delete success'
        ], Response::HTTP_OK);
    }
}
