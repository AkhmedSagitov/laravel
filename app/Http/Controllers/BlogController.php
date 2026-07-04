<?php

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function index() {

        $posts = collect(array_fill(0, 10, (object)[
            'id' => 123,
            'title' => 'This is title',
            'body' => 'This is body',
            'published_at' => null,
            'links' => null
        ]));
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
