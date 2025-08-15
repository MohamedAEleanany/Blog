<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
        $posts = [
            [
                'id' => 1,
                'title' => 'What is framework ? ',
                'body' => 'Laravel FrameWork',
                'posted_by' => 'Mohamed'
            ],
            [
                'id' => 2,
                'title' => 'What is Programming language ? ',
                'body' => 'PHP',
                'posted_by' => 'Ahmed'
            ],
            [
                'id' => 3,
                'title' => 'What is Design Pattern ?',
                'body' => 'MVC',
                'posted_by' => 'Ali'
            ],
        ];*/

        $posts = Post::all();

        return view('posts.index', ['allposts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($post)
    {
        $post = [

            'id' => 1,
            'title' => 'What is framework ? ',
            'body' => 'Laravel FrameWork',
            'posted_by' => 'Mohamed'

        ];
        return view('posts.view', ['postDetails' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
