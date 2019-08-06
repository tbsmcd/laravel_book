<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistPost;

class UserController extends Controller
{
    public function register(UserRegistPost $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        // 略
    }
}