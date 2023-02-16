<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\PosrService;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {
        PostService::create($request);

        return redirect()->route('posts.index')->withMessage('Post created successfully.');
    }
}
