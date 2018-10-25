<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\User;
use Illuminate\Http\Request;

class StandardController extends Controller
{
   
    // created controller for register
    public function register(){
        return view('auth.register');
    }

    // created controller for controller
    public function table(){
        $users =User::all();
        return view('pages.index', compact('users'));
    }

    
    public function create(){
        $users =User::all();
        return view('posts.create');
    }
    


    public function store(PostRequest $request){
        $id =Auth::user()->id;
        $post=new Post([
            'title'=>$request->title,
            'content'=>$request->content,
            'user_id'=>$id
        ]);
        $post->save();
        return redirect()->back();
    }

    public function details($id){
        $post=Post::whereId($id)->first();
        return view('posts.details',compact('post'));
    }


}
