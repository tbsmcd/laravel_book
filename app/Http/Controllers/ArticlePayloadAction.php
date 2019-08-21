<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

final class ArticlePayloadAction extends Controller
{
    public function __invoke(Request $request)
    {
        $resource = new ArticleResource([
            'id' => 1,
            'title' => 'Laravel rest api',
            'comments' => [
                [
                    'id' => 2134,
                    'body' => 'test',
                    'user_id' => 10000,
                    'user_name' => 'tbsmcd',
                ]
            ],
            'user_id' => 2000,
            'user_name' => 'user1'
        ]);
        return $resource->response($request)->header('content-type', 'application/hal+json');
    }
}