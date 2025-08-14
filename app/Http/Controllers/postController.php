<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    function getAllPosts()
    {
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
    }
}
