<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test', ['data' => 'Mohamed']);
});
/*
Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'What is framework ? ',
            'body' => 'Laravel FrameWork',
            'posted_by' => 'Mohamed'
        ],
        [
            'id' => 2,
            'title' => 'What is language ? ',
            'body' => 'PHP',
            'posted_by' => 'Ahmed'
        ],
        [
            'id' => 3,
            'title' => 'What is Design Pattern ?',
            'body' => 'Use MVC',
            'posted_by' => 'Ali'
        ],
    ];
    return view('post', ['allposts' => $posts]);
});
*/

Route::get('/posts', [postController::class, 'index'])->name('post.index');
Route::get('/posts/create', [postController::class, 'create'])->name('post.create');
Route::post('/posts', [postController::class, 'create'])->name('post.store');
Route::get('/posts/{post}', [postController::class, 'show'])->name('posts.show')->where(['post' => '[0-9]+']);
Route::delete('/posts/{post}', [postController::class, 'destroy'])->name('posts.destroy');
