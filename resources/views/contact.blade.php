@extends('layouts.app') @section('content')

 
<div class="row" id="contatti">
<div class="container_contact mt-5" >

    <div class="row">
      <div class="col-md-6 maps mt-5" >
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACT</h2>
        <form action="">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="First name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Second Nmae" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2" placeholder="Phone number" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Text Area" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  I am not a robot
                </label>
              </div>
            </div>
            </div>
            <div class="col-12">
              <button class="btn btn-warning" type="submit">Submit</button>
            </div>
          </div>
        </form>
        <div class="text-white m-5">
        

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+237) 123456</a><br>
        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+237) 123456</a><br>
        <i class="fa fa-envelope mt-3"></i> <a href=""> info@sra-cm.com</a><br>
        <i class="fas fa-globe mt-3"></i> Yaounde, 1, 00184 CMR<br>
        <i class="fas fa-globe mt-3"></i> Buea, 1, 00184 CMR<br>
        </div>
      </div>

    </div>
</div>
</div>


@endsection
