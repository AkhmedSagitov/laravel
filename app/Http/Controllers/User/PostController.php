<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('user.posts.index');
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        return redirect()->route('user.posts.show', 123);
    }

    public function edit($post)
    {
        return view('user.posts.edit', compact('post'));
    }

    public function show($post)
    {
        return view('user.posts.show', compact('post'));
    }


}
