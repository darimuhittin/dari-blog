<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{

    public function index()
    {
        return view('admin.index', [
            'posts' => Auth::user()->posts
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.edit', [
            'post' => $post,
            'categories' => Category::all(),
            'header' => 'Edit Post'
        ]);
    }


    public function update(Post $post)
    {

        $vars = request()->validate([
            'title' => ['min:3', 'max:255'],
            'summary' => ['min:3', 'max:255'],
            'body' => ['min:3', 'max:1000'],
            'category_id' => ['exists:categories,id']
        ]);

        $post->update($vars);

        return redirect('/admin/posts')->with('message', 'Update successfull');
    }
    public function create()
    {
        return view('admin.create', [
            'categories' => Category::all(),
            'header' => 'Create New Post'
        ]);
    }

    public function store()
    {

        $vars = request()->validate([
            'title' => ['min:3', 'max:255'],
            'slug' => ['min:3', 'max:255', 'unique:posts,slug'],
            'summary' => ['min:3', 'max:255'],
            'body' => ['min:3', 'max:1000'],
            'category_id' => ['exists:categories,id']
        ]);

        $vars['user_id'] = auth()->id();
        Post::create($vars);

        return redirect('/')->with('message', 'Adding post successful.');
    }
}
