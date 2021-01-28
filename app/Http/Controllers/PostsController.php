<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {
        return view('posts', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
