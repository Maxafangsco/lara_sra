@extends('layouts.app')
 @section('content')
 <p class="d-flex justify-content-center"><h2>Album List</h2></p>
<div class="container border  d-flex justify-content-center">
  <div class="row">
<div class="container d-flex justify-content-end">
  <a href="{{ route('albums.create') }}"><button type="button" class="btn btn-primary">Create</button></a>
</div>

<table class="table table-hover">
  <thead>
      <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Manage</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($albums as $album)
      <tr>
          <th scope="row">{{ $album->id }}</th>
          <td>
              <a href="{{ route('albums.show',$album->id) }}">
                  {{ $album->title }}
              </a>
          </td>
          <td>
              <div class="d-flex justify-center">
                  <a href="{{ route('albums.edit',$album->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                  <form action="{{ route('albums.destroy',$album->id) }}" method="POST">
                      @csrf @method('DELETE')
                      <button type="submit" class="btn btn-danger ml-3">DELETE</button>
                  </form>
              </div>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
  </div>
</div>
@endsection
