@extends('welcome')


        @section('404')
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- End Preloader -->

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<div class="container">
    <!-- start header section -->
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_top">
                    <div class="header_top_left">
                        <ul class="top_nav">
                            @include('layout/sections')
                            <li><a href="{{route('all_posts')}}">All Posts</a></li>
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <p><?=  date('l jS \of F Y h:i:s A'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area">
                        <!-- for your img logo format
                        <a href="home.html" class="logo">
                          <img src="img/logo.jpg" alt="logo">
                        </a> -->
                        <!-- for your text logo format -->
                        <a href="#" class="logo">
                            News <span>Feed</span>
                        </a>
                    </div>
                    @include('layout/baner')
                </div>
            </div>
        </div>
    </header><!-- End header section -->
    <!-- start nav section -->
    <section id="navArea">
        <!-- Start navbar -->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                    <li class="active"><a href="home.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                    @include('layout/sections')
                    <li><a href="{{URL::asset('contact')}}">Contact Us</a></li>
                    <li><a href="{{route('404')}}">404 Page</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </nav>
    </section><!-- End nav section -->
    <section id="newsSection">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- start news sticker -->
                <div class="latest_newsarea">
                    <span>All NEWS</span>
                    <ul id="ticker01" class="news_sticker">
                        @foreach($all_posts as $post )
                            @if(Storage::disk('local')->has($post->title.'.jpg'))
                                <li><a href="{{route('single_view_from_table',['id'=>$post->id])}}"><img src="{{route('get.image',['filename'=>$post->title.'.jpg'])}}"  alt="">{{$post->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>

                    {{--SOCIAL--}}
                    @include('layout/social')

                </div><!-- End news sticker -->
            </div>
        </div>
    </section>
    <!-- =========================
     //////////////This Theme Design and Developed //////////////////////
     //////////// by www.wpfreeware.com======================-->

    <!-- ==================start content body section=============== -->
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <!-- start error page -->
                    <div class="error_page">
                        <h3>We Are Sorry</h3>
                        <h1>404</h1>
                        <p>Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists</p>
                        <span></span>
                        <a href="{{route('news')}}" class="wow fadeInLeftBig">Go to home page</a>
                    </div>
                    <!-- End error page -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                    {{--POPULAR POSTS--}}

                    @include('layout/popular_posts')
                </aside>
            </div>
        </div>
    </section>
    <!-- ==================End content body section=============== -->
    <footer id="footer">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInLeftBig">
                        <h2>Flickr Images</h2>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInDown">
                        <h2>Tag</h2>
                        <ul class="tag_nav">
                            @include('layout/sections')
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInRightBig">
                        <h2>Contact</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <address>
                            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="copyright">
                All Rights Reserved <a href="home.html">NewsFeed</a>
            </p>
            <p class="developer">Developed By <a href="http://wpfreeware.com">WpFreeware</a></p>
        </div>
    </footer>
</div> <!-- /.container -->



<!-- =========================
      //////////////This Theme Design and Developed //////////////////////
      //////////// by www.wpfreeware.com======================-->

@stop