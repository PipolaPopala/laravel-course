<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Post\StoreRequest;
use App\Http\Requests\Api\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    //
    public function index()
    {
        return PostResource::collection(Post::all())->resolve();
    }

    public function show(Post  $post)
    {
//        $post = Post::findOrFail($id); // тот же функционал, который присходит, если в параметре прописано 'Post  $post', а не просто '$post'
        return PostResource::make($post)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $post = PostService::create($data);
        return $post;
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return $post;
    }

    public function destroy(Post  $post)
    {
        $post->delete();
        return response([
            'message' => 'delete success'
        ], Response::HTTP_OK);
    }
}
