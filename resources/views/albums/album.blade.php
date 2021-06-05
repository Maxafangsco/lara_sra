  @extends('layouts.app') 
  @section('content')
  <body>
    <div class="container">
    
      <div class="starter-template">
        <div class="media">
          <img class="media-object pull-left"alt="{{$album->name}}" src="{{asset( 'storage/' .$album->cover_image)}} " width="50" height="50>
           <div class="container">
            <div class="media-body">
              <div class="row">
                <div class="col">
                    <h4 class="media_heading">Album Name:</h4>
                    <p>{{$album->name}}</p>
                </div>
                <div class="row">
                  <div class="media">
                    <h4 class="media_heading">AlbumDescription :</h4>
                    <p>{{$album->description}}<p>
                    </div>
                </div>
              </div>
            </div>
           </div>
    </div>
    </div>
      <div class="row mt-5 ">
        @foreach($album->Photos as $photo)
          <div class="col-lg-3">
            <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
              <img alt="{{$album->name}}" src="/storage/{{$photo->image}}">
              <div class="caption">
                <p>{{$photo->description}}</p>
                <p><p>Created date:  {{ date("d F Y",strtotime($photo->created_at)) }} at {{ date("g:ha",strtotime($photo->created_at)) }}</p></p>
                {{-- <a href="{{URL::route('delete_image',array('id'=>$photo->id))}}" onclick="return confirm('Are you sure?')"><button type="button" class="btnbtn-danger btn-small">Delete Image </button></a> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </body>
  @endsection