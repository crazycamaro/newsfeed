@extends('welcome')

@section('single_news')



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
                    <li><a href="contact.html">Contact Us</a></li>
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
                    <div class="single_page">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            @foreach($sections as $sec)
                                <li><a href="#">{{$sec->section}}</a></li>
                            @endforeach

                        </ol>

                        <div class="post_commentbox">
                            <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                            <span><i class="fa fa-calendar"></i>6:49 AM</span>
                                  @foreach($sections as $sec)
                                    <a href="#"><i class="fa fa-tags"></i>{{$sec->section}}</a>
                                  @endforeach
                        </div>


                        <div class="single_page_content">
                            @foreach($posts as $post)
                                <ul class="spost_nav wow fadeInDown animated">
                                    <li>
                                        <div class="media">
                                            <a class="media-left" href="{{route('single_view_from_table',['id'=>$post->id])}}">
                                                <img src="{{route('get.image',['filename'=>$post->title.'.jpg'])}}" alt="img">
                                            </a>
                                            <div class="media-body">
                                                <a class="catg_title" href="{{route('single_view_from_table',['id'=>$post->id])}}"> {{$post->title}}</a>

                                                <div style="width:40%;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$post->description}}</div>
                                            </div>

                                        </div>
                                </ul>

                            @endforeach

                            {{ $posts->links() }}







                        <div class="social_link">
                            <ul class="sociallink_nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                    {{--POPULAR POSTS--}}
                    @include('layout/popular_posts')

                            <!-- start tab section -->
                    <div class="single_sidebar">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
                            <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
                            <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="category">
                                <ul class="cat-item">
                                    @include('layout/sections')
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="video">
                                <div class="vide_area">
                                    <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="comments">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="single_page.html" class="media-left">
                                                <img alt="img" src="img/post_img1.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="single_page.html" class="media-left">
                                                <img alt="img" src="img/post_img2.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="single_page.html" class="media-left">
                                                <img alt="img" src="img/post_img1.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="single_page.html" class="media-left">
                                                <img alt="img" src="img/post_img2.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End tab section -->
                    <!-- sponsor add -->
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Sponsor</span></h2>
                        <a class="sideAdd" href="#"><img src="{{URL::asset('img/Tire_Brands_Nokian.jpg')}}" alt="img"></a>tech
                    </div>
                    <!-- End sponsor add -->
                    <!-- Category Archive -->
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Category Archive</span></h2>
                        <select class="catgArchive">
                            <option>Select Category</option>
                            <option>Life styles</option>
                            <option>Sports</option>
                            <option>Technology</option>
                            <option>Treads</option>
                        </select>
                    </div>
                    <!-- End category Archive -->
                    <!-- sponsor add -->
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Links</span></h2>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Rss Feed</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Life & Style</a></li>
                        </ul>
                    </div>
                    <!-- End sponsor add -->
                </aside>
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

















@stop