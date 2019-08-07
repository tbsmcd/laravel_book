<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistPost;

class UserController extends Controller
{
    public function register(UserRegistPost $request)
    {
        // ここに来るまでにバリデーション処理が行われている
        $name = $request->input('name');
        $age = $request->input('age');
        // 略
    }
}