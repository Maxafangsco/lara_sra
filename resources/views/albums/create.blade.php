@extends('albums.dashboard') @section('content')

<div class="container border mt-5">
    <div class="d-flex justify-content-center">  
      <h1>Create Album</h1>
      </div>
  <hr>
    <form method="POST" action="{{ route('albums.store') }}">
        @csrf
        <div class="">
            <label for="title" > Post Title </label>
            <div>
                <input type="text" id="title" name="title" placeholder="Album name" />
            </div>
        </div>

        <div class="rounded">
            <a href="{{ route('albums.create') }}"><button type="submit" class="btn btn-primary m-5">Create</button></a>
        </div>
    </form>
</div>

@endsection
