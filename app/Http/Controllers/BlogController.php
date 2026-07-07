<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {

        $search = $request->input('search');
        $categoryId = $request->input('category_id');

        $posts = collect(array_fill(0, 10, (object)[
            'id' => 123,
            'title' => 'This is title',
            'body' => 'This is body',
            'published_at' => null,
            'links' => null,
            'category_id' => 1,
        ]));

        $posts = array_filter($posts->toArray(), function($post) use ($search, $categoryId) {

            if ($search && ! str_contains($post->title, $search)) {
                return false;
            }

            if ($categoryId && $post->category_id != $categoryId) {
                return false;
            }

            return true;

        });

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
