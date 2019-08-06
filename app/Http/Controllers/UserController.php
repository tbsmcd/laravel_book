<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        // 略
    }
}