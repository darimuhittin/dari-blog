<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class AdminPostController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function edit(Post $post)
    {
        return view('admin.edit', [
            'post' => $post
        ]);
    }
}
