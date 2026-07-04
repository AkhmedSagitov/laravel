<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

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

    public function store()
    {
        return 'Create';
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
