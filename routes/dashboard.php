<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Dashboard\IndexController::class, '__invoke'])->name('index');
Route::get('/posts', [\App\Http\Controllers\Dashboard\PostsController::class, '__invoke'])->name('posts');
Route::get('/posts/create', [\App\Http\Controllers\Dashboard\CreatePostController::class, '__invoke'])->name('posts.create');
Route::post('/posts/save', [\App\Http\Controllers\Dashboard\CreatePostController::class, 'save'])->name('posts.save');
Route::get('/posts/{post}', [\App\Http\Controllers\Dashboard\PostController::class, '__invoke'])->name('post');
Route::post('/posts/{post}/save', [\App\Http\Controllers\Dashboard\PostController::class, 'save'])->name('post.save');

Route::post('/update/name', [\App\Http\Controllers\Dashboard\NameController::class, '__invoke'])->name('update.name');
