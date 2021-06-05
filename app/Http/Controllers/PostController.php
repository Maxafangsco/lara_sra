<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use  TCG\Voyager\Models\Post;
use TCG\Voyager\Contracts\User;


class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->latest()->paginate(6);

        return view('blog.blog',compact('posts'));
    }

    public function show($id){

        // $post = Post::where('id', '=', $id)->firstOrFail();
        $post = Post::where('id', $id)->firstOrFail();
        $recents = Post::latest()->take(4)->get();
        return view('blog.show', compact('post','recents'));
    }

    public function comment(Request $request)
    {
     $request->validate([
         'name'=>'required',
         'email'=>'required',
         'body'=>'required',
     ]);
      
     $name=$request->name;
     $email=$request->email;
     $body=$request->body;

     $comments = new Comment;
     $comments->name = $name;
     $comments->email = $email;
     $comments->body = $body;
     $comments->save();

     return back();
    }

    }