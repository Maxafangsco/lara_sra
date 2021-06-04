<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumsController extends Controller
{
    
  public function getList()
  {
    $albums = Album::with('Photos')->get();
    return View('albums.index')
    ->with('albums',$albums);
  }
  public function getAlbum($id)
  {
    $album = Album::with('Photos')->find($id);
    return View('albums.album')
    ->with('album',$album);
  }
  public function getForm()
  {
    return View('albums.createalbum');
  }
  
  public function postCreate(Request $request)
  { 
    $request->validate([
      'name' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  ]);
  $image = $request->image;
  $name = $request->name;
  $description = $request->description;

  $Imagename = time() . $image->getClientOriginalName();
 
  $request->file('image')->move('image', $Imagename);
    // $albums = Album::create([
    //   'name' => $request->name,
    //   'description' => $request->description,
    //   'cover_image' => $request->image,
    // ]);
    $albums = new Album;
    // $albums->user_id = Auth::user()->id;  // for auth user only
    $albums->name = $name;
    $albums->description = $description;
    $albums->cover_image =$Imagename;
    $albums->save();

        return redirect()->route('show_album',($albums->id));
  }

  
  public function getDelete($id)
  {
    $album = Album::find($id);

    $album->delete();

    return Redirect()->route('albums.index');
  }
}
