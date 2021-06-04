@extends('layouts.app')

@section('content')

<!-- Blog code starts here -->


  <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>

        <div class="row">
       @foreach ($posts as $post)
       <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="{{ url('storage/' .$post->image) }}"  class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">
              {!! Str::limit($post->body, 150) !!}
            </p>
            <a href="/post/{{ $post->id }}"  class="btn btn-primary">Read</a>            
          </div>
        </div>
      </div>
           
       @endforeach
        </div>
      </section>
      <!--Section: Content-->
    </div>
  </main>
  <!--Main layout-->

<!-- Blog code ends here -->
    
@endsection