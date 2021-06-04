<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AlbumsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[PageController::class,'index']);


Route::get('about',[PageController::class,'about']);
// Route::get('blog',[PageController::class,'blog']);
Route::get('contact',[PageController::class,'contact']);
Route::get('courses',[PageController::class,'courses']);
Route::get('teacher',[PageController::class,'teacher']);



// Album and Images 



Route::get('albums', [AlbumsController::class,'getList'])->name('albums.index');
Route::get('/createalbum',[AlbumsController::class,'getForm'])->name('create_album_form');
Route::post('createalbum',[AlbumsController::class,'postCreate'])->name('create_album');
Route::get('/deletealbum/{id}',[AlbumsController::class,'getDelete'])->name('delete_album');
Route::get('/album/{id}',[AlbumsController::class,'getAlbum'])->name('show_album');



Route::get('/addimage/{id}', [ImageController::class,'getForm'])->name('add_image');
Route::post('/addimage', [ImageController::class,'postAdd'])->name('add_image_to_album');
Route::get('/deleteimage/{id}', [ImageController::class,'getDelete'])->name('delete_image');

Route::post('/moveimage',  [ImageController::class,'postMove']);


// blog

Route::get('/blog',[PostController::class,'index'])->name('blog');
Route::get('post/{id}', [PostController::class,'show']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
