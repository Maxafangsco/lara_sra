@extends('layouts.app') @section('content')
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('albums.index') }}">Awesome Albums</a>
          <div class="nav-collapse collapse">
              <ul class="nav navbar-nav">
                  <li><a href="{{route('create_album_form')}}">Create New Album</a></li>
              </ul>
          </div>
          <!--/.nav-collapse -->
      </div>
  </div>

  <div class="container">
      <div class="starter-template">
          <div class="row">
              @foreach($albums as $album)
              <div class="col-lg-3">
                  <div class="thumbnail">
                      <img alt="{{$album->name}}" src="{{asset( 'storage/' .$album->cover_image)}}" width="50" height="50" />
                      <div class="caption">
                          <h3>{{$album->name}}</h3>
                          {{--
                          <p>{{$album->description}}</p>
                          --}}
                          <p>{!! Str::limit($album->description, 150) !!}</p>
                          <p>{{count($album->Photos)}} image(s).</p>
                          <p>posted on {{ date("d F Y",strtotime($album->created_at)) }}</p>
                          <p><a href="{{route('show_album',$album->id)}}" class="btn btn-big btn-default">Show Gallery</a></p>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
      <!-- /.container -->
  </div>
</body>

  @endsection
{{-- </html> --}}