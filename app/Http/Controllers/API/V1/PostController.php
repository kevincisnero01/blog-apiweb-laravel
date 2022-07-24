<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }


    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'message' => 'Post eliminado.'
        ], 204);
    }
}
