<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class PostCommentController extends Controller
{
    //
    public function store(Post $post)
    {
        # code...
        $validated = request()->validate([
            'comment' => ['min:5', 'max:255']
        ]);

        $post->comments()->create([
            'user_id' => Auth::user()->id,
            'body' => $validated['comment']
        ]);

        return redirect()->back();
    }

    public function delete(Post $post, Comment $comment)
    {
        # code...
        $comment->delete();

        return redirect()->back();
    }
}
