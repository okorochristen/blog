<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class StandardController extends Controller
{

    // created controller for register
    public function register(){
        return view('auth.register');
    }

    // created controller for controller
    public function table(){
        $users =Post::all();
        return view('pages.index', compact('users'));
    }
    public function show(){
        $post =Post::all();
        return view('posts.show', compact('post'));
    }



    public function create(){

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
        return redirect()-> back()->with('status','successful');
    }




    public function new(){
        $post=Post::all();
        return view('posts.new',compact('post'));
    }

    public function details($id){
        $post=Post::whereId($id)->first();
        return view('posts.details',compact('post'));
    }



    public function edit($id)

    {
        $post=Post::whereId($id)->first();
        return view('posts.edit',compact('post'));

    }


    public function update(PostRequest $request,  $id)

    {
        $post=Post::find($id);
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        return redirect('/posts/show');



    }



          public function delete($id)
          {

              $post = Post::find( $id );


              $post->delete();

            //   Session::flash('success', 'Post deleted.');

              return redirect()->back();
          }



}
