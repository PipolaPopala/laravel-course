<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('posts', [PostController::class, 'index']);
//Route::get('posts/{post}', [PostController::class, 'show']);
//Route::post('posts', [PostController::class, 'store']);
//Route::patch('posts/{post}', [PostController::class, 'update']);
//Route::delete('posts/{post}', [PostController::class, 'destroy']);
// ниже альтернативный вариант более короткий, объединяющий в себе все 5 строчек сверху

Route::apiResource('posts', PostController::class);

//Route::get('comments', [PostController::class, 'index']);
//Route::get('comments/{comment}', [PostController::class, 'show']);
//Route::post('comments', [PostController::class, 'store']);
//Route::patch('comments/{comment}', [PostController::class, 'update']);
//Route::delete('comments/{comment}', [PostController::class, 'destroy']);
Route::apiResource('comments', CommentController::class);

//Route::get('profiles', [PostController::class, 'index']);
//Route::get('profiles/{profile}', [PostController::class, 'show']);
//Route::post('profiles', [PostController::class, 'store']);
//Route::patch('profiles/{profile}', [PostController::class, 'update']);
//Route::delete('profiles/{profile}', [PostController::class, 'destroy']);
Route::apiResource('profiles', ProfileController::class);
