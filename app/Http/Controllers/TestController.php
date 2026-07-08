<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test():string {

        $test = ['foo' => 'bar'];

        return response()->json($test);

    }
}
