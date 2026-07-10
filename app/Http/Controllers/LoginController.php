<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        $session = app('session');
        dd($session);
        return view('login.index');

    }

    public function store(Request $request)
    {

        $ip = $request->ip();
        return redirect()->route('user');
    }
}
