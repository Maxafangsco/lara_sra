@extends('layouts.app') @section('content')
<body>
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