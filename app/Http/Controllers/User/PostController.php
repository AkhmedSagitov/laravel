<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'user.index';
    }

    public function show($post)
    {
        return 'user.show ' . $post;
    }

    public function like($post)
    {
        return 'user.like ' . $post;
    }
}
