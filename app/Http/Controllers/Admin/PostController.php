<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return 'admin.create';
    }

    public function store(Request $request)
    {
        return 'admin.store';
    }

    public function edit($post)
    {
        return 'admin.edit ' . $post;
    }

    public function update(Request $request, $post)
    {
        return 'admin.update ' . $post;
    }

    public function delete($post)
    {
        return 'admin.delete ' . $post;
    }
}
