<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'body'=>'required',
        ]);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->body = $request->body;
        $comment->blog_id = $request->blog_id;
        $comment->parent_id = $request->parent_id;
        $comment->user_id = 0;
        $comment->save();

        /*Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body,
            'user_id' => 1
        ]);*/

        $notif = [
            'alert-type' => 'success',
            'message' => 'Post Successfully'
        ];

        return redirect()->back()->with($notif);
    }
}
