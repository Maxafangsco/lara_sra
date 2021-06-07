<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        $mentors = DB::table('albums')
        ->join('images','albums.id','=','images.album_id')
        ->select('images.*')
        ->where('albums.name','=','mentors')
        ->get();
return view('index',['mentors'=> $mentors]);
    }


    public function about(){

        return view('about');
    }


    public function blog(){

        return view('blog');
    }


    public function contact(){

        return view('contact');
    }


    public function courses(){

        return view('courses');
    }


    public function teacher(){


        $mentors = DB::table('albums')
                   ->join('images','albums.id','=','images.album_id')
                   ->select('images.*')
                   ->where('albums.name','=','mentors')
                   ->get();
        return view('teacher',['mentors'=> $mentors]);
    }

    
}
