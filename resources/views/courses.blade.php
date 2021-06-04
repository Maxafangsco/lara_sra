@extends('layouts.app') @section('content')


   <div class="container-fluid">
       <div class="row">
            <div class="background_image">
               <img class="bg-img" src="/img/blue-diamond-horizontal-background.jpeg" height="200px" width="100%">
               <p>test courses</p>
            </div>
           <h2 class="success"> Coureses</h2>
       </div>
   </div>


  

 <div class="container ">
   <div class="row m-3">

   <div class="col-md courses_left d-flex">
       <div class="course_image">
       <img class="img-fluid rounded" src="img/teachers/t-6.jpg" alt=""> 
       </div>
       <div class="course_text ml-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus eos placeat, aliquam eius amet beatae quia in aspernatur iste, 
          <a href="#" class="btn btn-primary">Read more</a>
           </div>
   </div>

   <div class="col-md courses_right d-flex">
      <div class="course_image">
            <img class="img-fluid rounded" src="img/teachers/t-7.jpg" alt=""> 
        </div>
            <div class="course_text ml-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus eos placeat, aliquam eius amet beatae quia in aspernatur iste, 
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
    </div>
</div>

 </div>

@endsection
