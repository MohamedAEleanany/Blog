<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test', ['data' => 'Mohamed']);
});

Route::get('/posts', [postController::class, 'getAllPosts']);
