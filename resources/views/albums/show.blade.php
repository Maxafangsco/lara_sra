@extends('albums.dashboard') 

@section('content')

<div class="container border m-5">
    <button type="text" class="btn btn-info m-3">  <a href="{{ '/albums' }}">Back</a> </button>
<div class="container mx-auto m-2 p-2 border">
    <form method="POST" action="{{ route('ablums.upload', $album->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="">
            <label for="title"> Album Image </label>
            <div class="m-2 border">
                <input type="file" id="image" name="image" />
            </div>
        </div>
        <div class="pt-5">
            <button type="submit" class="btn btn-primary ml-3">Upload</button>
        </div>
    </form>
</div>
<hr />
<div class="d-flex container mt-4 border ">
   @foreach  ($photos as $photo)
    <div class="row">
        <div class="col-4">
                <a>
                    <img alt="gallery" src="{{asset($photo->getUrl('thumb')) }}" />
                </a>
                <div class="d-flex justify-content-start">
                    <button type="text" class="btn btn-success m-3">  <a href="{{ route('album.image.show', [$album->id, $photo->id]) }}">Full image</a> </button>
                    <form method="POST" action="{{ route('album.image.destroy', [$album->id, $photo->id]) }}">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger m-3">DELETE</button>
                    </form>
                </div>
        </div>
    </div>
    @endforeach
</div>
</div>

@endsection
