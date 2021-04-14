@extends('layouts.app') @section('content')
<link href="css/style.css" rel="stylesheet" />

<link href="js/main.js" type="text/javascript" />

<!-- start carousel  -->

<div class="bd_carousel">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/image_1.jpg" class="d-block w-75 mx-auto" alt="image_1" />
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/image_2.jpg" class="d-block w-75 mx-auto" alt="image_2" />
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/image_2.jpg" class="d-block w-75 mx-auto" alt="image_3" />
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- end carousel -->

<!-- start section after carosel -->

<div class="container-fluid mt-5 mb-1">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3 mt-1 mb-1">
      <div class="card">
        <img class="card-img-top mx-auto d-block" src="/img/icon/infographic.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Research</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mt-1 mb-1">
      <div class="card">
        <img class="card-img-top mx-auto d-block" src="/img/icon/image_1.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Research</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mt-1 mb-1">
      <div class="card">
        <img class="card-img-top mx-auto d-block" src="/img/icon/infographic.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Research</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 mt-1 mb-2">
      <div class="card">
        <img class="card-img-top mx-auto d-block" src="/img/icon/mentoship.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Research</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end section after carosel -->

<!-- start of upcoming events -->

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-6">
      <!-- section title -->
      <div class="about-cont">
        <h2>Welcome to SRA</h2>
        <p>
          Quality health care remains a luxury for most of Africa and Cameroon in particular. We die of preventable causes partly because little to nothing is known on disease patterns in our community. <br />
          <br />
          We belief, standards of care can be improved with evidence-based data on the prevailing health concerns in every community.
        </p>
        <a href="#" class="btn btn-primary">Read more</a>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="event_right1">
        <!-- background image here -->
        <img src="/img/bg-1.png" alt="background image" />
      </div>

      <div class="container event_right2">
        <div class="event-title">
          <h3>Upcoming events</h3>
        </div>
        <!-- event title -->
        <ul>
          <li>
            <div class="singel-event">
              <span><i class="fa fa-calendar"></i> 2 March 2021</span>
              <a href="events-singel.html"><h4>Research workshop</h4></a>
              <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
              <span><i class="fa fa-map-marker"></i> Online</span>
            </div>
          </li>
          <li>
            <div class="singel-event">
              <span><i class="fa fa-calendar"></i> 2 July 2021</span>
              <a href="events-singel.html"><h4>Leadership Summit</h4></a>
              <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
              <span><i class="fa fa-map-marker"></i> University of Buea Compus </span>
            </div>
          </li>
          <li>
            <div class="singel-event">
              <span><i class="fa fa-calendar"></i> 2 May 2021</span>
              <a href="events-singel.html"><h4>Enviroement conference</h4></a>
              <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
              <span><i class="fa fa-map-marker"></i> Onlin </span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- end of upcoming events -->

<!--====== APPLY PART START ======-->

<section id="apply-aprt" class="pb-120">
  <div class="container mt-5 mb-5">
    <div class="apply">
      <div class="row ml-sm-3">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="apply-cont apply-color-1">
            <h3>Apply for Spring 2021</h3>
            <p>Are you a scientist or knows someone who knows someone who is a scientist? This is for you!Start your journey with us today! By clicking the link demystify research methodology.</p>
            <a href="#" class="btn btn-primary">Apply Now</a>
          </div>
          <!-- apply cont -->
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="apply-cont apply-color-2">
            <h3>Apply for Mentorship Program</h3>
            <p>Hurray!! It is the start of the year and the Sintieh Research Alliance through its training arm the Sintieh Research Academy continues on its mission to demystify research methodology.</p>
            <a href="#" class="btn btn-primary">Apply Now</a>
          </div>
          <!-- apply cont -->
        </div>
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>

<!--====== APPLY PART ENDS ======-->

<!-- start video link from youtube -->
<div class="conatiner">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=jh3k1b30l4Q"></iframe>
  </div>
</div>
<!-- end video link from youtube -->

<!-- start feauture teachers  -->

<div class="container">
  <div class="row">
    <div class="col-lg-5 feature_teacher">
      <div class="section-title mt-5">
        <h4>Featured Teachers</h4>
        <h2>Meet Our teachers</h2>
      </div>
      <!-- section title -->
      <div class="teachers-cont">
        <p>
          Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a
          odio tincidunt mauris. <br />
          <br />
          auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris
        </p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
      <!-- teachers cont -->
    </div>
    <div class="col-lg-6 offset-lg-1 mt-4">
      <div class="teachers mt-20">
        <div class="row">
          <div class="col-sm-6">
            <div class="singel-teachers mt-30 text-center">
              <div class="image">
                <img src="/img//teachers/t-1.jpg" alt="Teachers" />
              </div>
              <div class="cont">
                <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                <span>Vice chencelor</span>
              </div>
            </div>
            <!-- singel teachers -->
          </div>
          <div class="col-sm-6">
            <div class="singel-teachers mt-30 text-center">
              <div class="image">
                <img src="/img//teachers/t-2.jpg" alt="Teachers" />
              </div>
              <div class="cont">
                <a href="teachers-singel.html"><h6>David card</h6></a>
                <span>Pro chencelor</span>
              </div>
            </div>
            <!-- singel teachers -->
          </div>
          <div class="col-sm-6">
            <div class="singel-teachers mt-30 text-center">
              <div class="image">
                <img src="/img//teachers/t-3.jpg" alt="Teachers" />
              </div>
              <div class="cont">
                <a href="teachers-singel.html"><h6>Rebeka alig</h6></a>
                <span>Pro chencelor</span>
              </div>
            </div>
            <!-- singel teachers -->
          </div>
          <div class="col-sm-6">
            <div class="singel-teachers mt-30 text-center">
              <div class="image">
                <img src="/img/teachers/t-4.jpg" alt="Teachers" />
              </div>
              <div class="cont">
                <a href="teachers-singel.html"><h6>Hanna bein</h6></a>
                <span>Aerobics head</span>
              </div>
            </div>
            <!-- singel teachers -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- teachers -->
    </div>
  </div>
</div>

<!-- end feauture teachers -->

<!-- Testimonial starts here -->
<div class="container bottom_footer">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <h2>Testimonials</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="img-box"><img src="/img/teachers/t-1.jpg" alt="" /></div>
            <p class="testimonial">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse
              varius nibh non aliquet.
            </p>
            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
          </div>
          <div class="carousel-item">
            <div class="img-box"><img src="/img/teachers/t-2.jpg" alt="" /></div>
            <p class="testimonial">
              Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh,
              facilisis gravida odio.
            </p>
            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
          </div>
          <div class="carousel-item">
            <div class="img-box"><img src="/img/teachers/t-3.jpg" alt="" /></div>
            <p class="testimonial">
              Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla
              massa. Etiam hendrerit dolor eget rutrum.
            </p>
            <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
          </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial ends here -->

@endsection
