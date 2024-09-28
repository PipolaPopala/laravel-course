<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    //
    public function index()
    {
        return Post::all();
    }

    public function show(Post  $post)
    {
//        $post = Post::findOrFail($id); // тот же функционал, который присходит, если в параметре прописано 'Post  $post', а не просто '$post'
        return $post;
    }

    public function store()
    {
        $data = [
            'title' => 'my title',
            'content' => 'my content',
            'author' => 'IVAN',
            'like' => 10,
            'views' => 100,
            'category' => 'PHP',
            'tag' => 'LARAVEL',
            'published_at' => '2020-12-20',
        ];
        $post = PostService::create($data);
        return $post;
    }

    public function update(Post  $post)
    {
        $post->update(['title' => 'another title']);
        return $post;
    }

    public function delete(Post  $post)
    {
        $post->delete();
        return response([
            'message' => 'delete success'
        ], Response::HTTP_OK);
    }
}
