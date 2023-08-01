<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request) 
    {
        $request->validate([
            'content' => 'required|min:5',
            // Add any additional validation rules as needed.
        ]);

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->id();
        $comment->post_id = $request->input('post_id');
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
