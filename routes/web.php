<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ProfileController;

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

Route::get('comment/index', [CommentController::class, 'index']);
Route::get('comment/{post}/show', [CommentController::class, 'show']);
Route::get('comment/store', [CommentController::class, 'store']);
Route::get('comment/{post}/update', [CommentController::class, 'update']);
Route::get('comment/{post}/delete', [CommentController::class, 'delete']);

Route::get('profile/index', [ProfileController::class, 'index']);
Route::get('profile/{post}/show', [ProfileController::class, 'show']);
Route::get('profile/store', [ProfileController::class, 'store']);
Route::get('profile/{post}/update', [ProfileController::class, 'update']);
Route::get('profile/{post}/delete', [ProfileController::class, 'delete']);
