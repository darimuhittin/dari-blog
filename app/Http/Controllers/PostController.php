<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->filter(request(['search', 'category']))->paginate(5);
        //filter(request(['search', 'category']))->get();
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        # code...
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
