  @extends('layouts.app') 
  @section('content')
  <body>
    <div class="container">
           <div class="row justify-content-center">
               <img class="media-object m-5" alt="{{$album->name}}" src="{{asset( 'storage/' .$album->cover_image)}} " width="50" height="50">

                    <div class="media-body">
                                <div class="media">
                                    <h4 class="media_heading">Album Name: {{$album->name}}</h4>
                                </div>
                                <div class="media">
                                    <h4 class="media_heading">Description: {{$album->description}} </h4>
                                    <p></p>
                                </div>
                    </div>
                
            </div>
        </div>
        <div class="row m-5 p-5 ">
            @foreach($album->Photos as $photo)
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img alt="{{$album->name}}" src="/storage/{{$photo->image}}" />
                    <div class="caption">
                        <p>{{$photo->description}}</p>
                        <p>Created date: {{ date("d F Y",strtotime($photo->created_at)) }} at {{ date("g:ha",strtotime($photo->created_at)) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

  @endsection