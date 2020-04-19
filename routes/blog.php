<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Blog\IndexController::class, '__invoke'])->name('index');
