<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'all_posts');
    Route::get('/home', 'index')->name('home');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
});

