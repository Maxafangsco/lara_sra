@extends('dashboard')

@section('content')
<div>
    <div>Update Album</div>
    <div class="container">

        <div class="">
            <form method="POST" action="{{ route('albums.update',$album->id) }}">
                @csrf
                @method('PUT')
              <div class="sm:col-span-6">
                <label for="title" > Update Title </label>
                <div class="mt-1">
                  <input 
                  type="text" 
                  id="title"  
                  name="title"
                  value="{{ old('title',$album->title) }}" />
                </div>
              </div>
              <div class="sm:col-span-6 pt-5">
             <button>Update</button>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection