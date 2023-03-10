<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts' => Post::latest()->paginate()
        ]);
    }
}
