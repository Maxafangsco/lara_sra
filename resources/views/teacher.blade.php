@extends('layouts.app') @section('content')
<!-- teacher section starts here  -->

<h1 class="text-center text-warning" >Mentors <span class="badge badge-secondary">Mentors with a difference </span></h1>

      <div class="container teachers mt-20">
        <div class="row">
           @foreach ($mentors as $mentor)
           <div class=" col-sm-6 col-md-3">
           <div class="singel-teachers mt-30 text-center">
            <div class="image ">
              <img src="{{asset( 'storage/' .$mentor->image)}}" alt="Teachers" />
            </div>
            <div class="cont">
              <a href="teachers-singel.html"><h6>{{ $mentor->description }}</h6></a>
              <span>{{ $mentor->name }}</span>
            </div>
          </div>
        </div>
           @endforeach
            <!-- singel teachers -->
          </div>
        <!-- row -->
      </div>
      <!-- teachers -->
 

<!-- teacher section ends here -->


<div class="container">
<h1 class="text-center-start text-warning" >Provest</h1>
    <article class="row single-post mt-5 no-gutters justify-content-center">
        <div class="col-md-6">
            <div class="image-wrapper float-left pr-3">
                <img class="rounded img-fluid" src="/img/teachers/t-4.jpg" alt="Provost image">
            </div>
            <div class="single-post-content-wrapper p-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.
            </div>
        </div>
    </article>
</div>
 

@endsection
