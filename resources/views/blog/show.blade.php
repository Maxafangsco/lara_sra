@extends('layouts.app')

@section('content')
<!-- Blog code starts here -->

<div class="blog-single gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                <article class="article">
                    <div class="article-img">
                        <img src="img/image_2.jpg" title="" alt="" />
                    </div>
                    <div class="article-title">
                        <h2>{{ $post->title }}</h2>
                        <div class="media">
                            <div class="post_image">
                                <img class="img-fluid mx-auto d-block mb-2 float-md-left mr-md-4 img-thumbnail" src="{{ url('storage/' .$post->image) }}" title="" alt="Responsive image" />
                            </div>
                        </div>
                        <div class="media-body">
                            Posted by {{$post->authorId->name}} on {{$post->created_at->format('M d Y')}}
                        </div>
                    </div>

                    <div class="d-flex justify-content-center m-3"><h3>{{ $post->excerpt }}</h3></div>
                    <div class="article-content m-5">
                        {!! $post->body !!}
                    </div>
                </article>

                <div class="contact-form article-comment m-5">
                    <h4>Comments</h4>
                    <div id="disqus_thread"></div>
                    <script>
                  
                        var disqus_config = function () {
                        this.page.url = '{{Request::url() }}';
                        this.page.identifier ='{{ $post->id }}';
                        };
                     
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://sra-cm-com.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
            <div class="col-lg-4 m-15px-tb blog-aside">
                <!-- Author -->
                <div class="widget widget-author">
                    <div class="widget-title">
                        <h3>Author</h3>
                    </div>
                    <div class="widget-body">
                        <div class="media align-items-center">
                            <div class="avatar">
                                <img class="img-fluid mx-auto d-block mb-2 float-md-left mr-md-4 img-thumbnail" src="{{ url('storage/' .$post->authorId->avatar) }}" title="" alt="Responsive image" />
                            </div>
                        </div>
                        <div class="media-body">
                            <h6>Hello, I'm {{$post->authorId->name}}</h6>
                        </div>
                        <p>{{$post->authorId->about}}</p>
                    </div>
                </div>
                <!-- End Author -->
                <!-- Trending Post -->
                <div class="widget widget-post">
                    <div class="widget-title">
                        <h3>Trending Now</h3>
                    </div>
                    <div class="widget-body"></div>
                </div>
                <!-- End Trending Post -->
                <!-- Latest Post -->
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Latest Post</h3>
                    </div>
                    @foreach($recents as $recent)
                 
                    <div class="widget-body">
                        <div class="latest-post-aside media">
                            <a href="{{route('show_post',$post->id)}}">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="#">{{ $recent->title }}</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        {{$recent->authorId->name}}
                                    </a>
                                    <a class="date" href="#">
                                        {{$recent->created_at->format('M d Y')}}
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="{{ url('storage/' .$recent->image) }}" width="200" height="100" />
                                </a>
                            </div>
                        </a>
                        </div>
                    </div>
              
                    @endforeach
                </div>
                <!-- End Latest Post -->
                <!-- widget Tags -->
                <div class="widget widget-tags">
                    <div class="widget-title">
                        <h3>Latest Tags</h3>
                    </div>
                    <div class="widget-body">
                        <div class="nav tag-cloud">
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">Travel</a>
                            <a href="#">Web Design</a>
                            <a href="#">Marketing</a>
                            <a href="#">Research</a>
                            <a href="#">Managment</a>
                        </div>
                    </div>
                </div>
                <!-- End widget Tags -->
            </div>
        </div>
    </div>
</div>

<!-- Blog code ends here -->

@endsection