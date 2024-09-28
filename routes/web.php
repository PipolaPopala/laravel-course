<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/index', [PostController::class, 'index']);
Route::get('posts/{post}/show', [PostController::class, 'show']);
Route::get('posts/store', [PostController::class, 'store']);
Route::get('posts/{post}/update', [PostController::class, 'update']);
Route::get('posts/{post}/delete', [PostController::class, 'delete']);

//Route::get('posts/create');
//Route::get('posts/edit');
