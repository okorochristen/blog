<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;

use App\Http\Requests\PostRequest;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {

        $comment = new Comment;
        $comment->name =$request->name;
        $comment->email =$request->email;
        $comment->content = $request->content;
        $comment->post_id =$request->post_id;
        $comment->save();

        return redirect()-> back()->with('status','successful');
    }
}
