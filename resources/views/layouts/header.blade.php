<link href="css/style.css" rel="stylesheet" />

<link href="js/main.js" type="text/javascript" />

<!-- start top container-->

<div class="container-fluid d-flex top_head">
    <div class="row">
        <div class="col-3 d-flex p-2 justify-content-end">
            <div class="p-2">
                <div>
                    <i class="far fa-envelope"> info@sra-cm.com</i>
                </div>
                <i class="fas fa-map-marker-alt"> Street1 Yaounde</i>
            </div>
            <i class="fas p-2 mt-3 mx-2 fa-headset">
                Need Help <br />
                Call 0000
            </i>
        </div>

        {{-- News tickers starts here --}}
        <div class="col-6 d-flex justify-content-between align-items-center breaking-news">
            <div class="d-flex rounded flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
                <span class="d-flex align-items-center">&nbsp;Breaking News</span>
            </div>
            <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                <a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a>
                <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span>
                <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a>
            </marquee>
        </div>

        {{-- News tickers ends here --}}

        <div class="col-3 p-2 d-flex flex-row justify-content-end">
            <div class="btnn">
                <button type="button" class="btn btn-warning">Apply</button>
            </div>

            <!-- Login button start-->
            <div class="btn-group mx-5">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Login</a>
                    <a class="dropdown-item" href="#">Register</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Admin panel</a>
                </div>
            </div>
            <!-- Login button start-->
        </div>
    </div>
</div>

<!-- end top container-->

<!-- start Nav-->
<nav class="navbar navbar-expand-md navbar-expand-lg navbar-light head">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand mr-auto" href="#">
            <img src="/img/logo.png" alt="sit logo" class="img-responsive" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav flex-fill w-75 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ URL::to('courses') }}">Courses</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ URL::to('teacher') }}">Teacher</a>
                </li>
                {{-- <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ URL::to('blog') }}">Blog</a>
                </li> --}}
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{route('albums.index')}}">Multimedia</a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ URL::to('about') }}">About</a>
                    <ul class="sub-menu">
                        <li><a href="{{ URL::to('about') }}">About</a></li>
                        <li><a href="{{ URL::to('contact') }}">Contact</a></li>
                    </ul>
                </li>
            </ul>
            <form class="form-inline my-2  justify-content-end">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- end nav-->
