<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    function index()
    {
        $post = Post::query()->get();
        return response()->json([
            "status" => true,
            "message" => '',
            "data" => $post
        ]);
    }

    function show($id) {
        $post = Post::query()
        ->where("id", $id)
        ->first();
    
    if($post == null)
    {
        return response()->json([
            "status" => false,
            "message" => "Post tidak Ditemukan",
            "data" => null
        ]);
    }

    return response()->json([
        "status" => true,
        "message" => "",
        "data" => $post
    ]);

    }

    function store(Request $request) {
        $payload = $request->all();
        if (!isset($payload["image"]))
        {
            return response()->json([
                "status" => false,
                "message" => "wajib ada nama",
                "data" => null
            ]);
        }

        if (!isset($payload["title"]))
        {
            return response()->json([
                "status" => false,
                "message" => "wajib ada email",
                "data" => null
            ]);
        }

        if (!isset($payload["content"]))
        {
            return response()->json([
                "status" => false,
                "message" => "wajib ada password",
                "data" => null
            ]);
        }

        $post = Post::query()->create($payload);
        return response()->json([
            "status" => true,
            "massage" => "",
            "data" => $post
        ]);

    }

    function update(Request $request, $id) {
        
        $post = Post::query()
        ->where("id", $id)
        ->first();
    
    if($post == null)
    {
        return response()->json([
            "status" => false,
            "message" => "Post tidak Ditemukan",
            "data" => null
        ]);
    }

        $post->image = $request->file('image')->getClientOriginalName();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
    return response()->json([
        "success" => true,
        "message" => "Product updated successfully.",
        "data" => $post
        ]);

    }

    function destroy(Request $request, $id) {

        $post = Post::query()
        ->where("id", $id)
        ->first();

        $post->delete();
            return response()->json([
        "success" => true,
        "message" => "Product deleted successfully.",
        "data" => $post
        ]);

    }
}
