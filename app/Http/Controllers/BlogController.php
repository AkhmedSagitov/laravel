<?php

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function index() {

        $posts = (object)[
            'id' => 123,
            'title' => 'This is title',
            'body' => 'This is body',
        ];

        $posts = array_fill(0,10, $posts);
        return view('blog.index', compact('posts'));
    }

    public function show($post) {

        $post = (object)[
            'id' => 123,
            'title' => 'This is title',
            'body' => 'This is body',
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post) {
        return view('blog.like');
    }
}
