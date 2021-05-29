<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  TCG\Voyager\Models\Post;
use TCG\Voyager\Contracts\User;


class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(6);

        return view('blog.blog',compact('posts'));
    }

    public function show($id){

        // $post = Post::where('id', '=', $id)->firstOrFail();
        $post = Post::where('id', $id)->firstOrFail();
        // $user = User::select('id', $post->author_id);
        // dd($post);
        return view('blog.show', compact('post'));
    }

    }