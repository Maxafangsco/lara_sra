@extends('albums.dashboard')

@section('content')

<div class="container">
    <button type="text" class="btn btn-info m-3">  <a href="{{route('albums.show',$album->id) }}">Back</a> </button>
<div>
    {{ $album->title }}
</div>
 

    <div class="container mx-auto m-2 p-2 bg-white shadow-md rounded-lg">
<img src="{{ $image->getUrl('image') }}" alt="Original iamge">

</div>

@endsection
