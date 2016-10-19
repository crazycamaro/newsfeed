@extends('welcome')

@section('news')
    {{--HEADER--}}
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/theme.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{ URL::asset('js/search.js') }}"></script>

@section('news_header')
    @include('layout/sections')
@stop
{{--END HEADER--}}




<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-12">
            <div class="input-group col-lg-12">
                <div class="input-group col-lg-12">
                    <form action="{{route('news')}}" method="GET">
 <input type="text"   class="form-control input-lg"  name="global_search" placeholder="search..."    />
                         <span class="input-group-btn">
                        <button  class="btn btn-info btn-lg" type="submit">search</button>
                             </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





{{--<div class="container col-lg-12 col-md-12">--}}
{{--<div class="row col-lg-12 col-md-12">--}}
 {{--<table class="table table-bordered ">--}}
     {{--<caption><strong>Records {{ $all_posts->firstItem() }} - {{ $all_posts->lastItem() }}</strong>  from <strong>{{ $all_posts->total() }}</strong> records</caption>--}}
    {{--<tr >--}}
        {{--<td>POST ID</td>--}}
        {{--<td>CATEGORY</td>--}}
        {{--<td>TITLE</td>--}}
        {{--<td>DESCRIPTION</td>--}}
    {{--</tr>--}}
     {{--<tr >--}}
         {{--<form action="{{route('news')}}" method="GET" id="form"  name="form">--}}

                 {{--<td class="col-lg-3 col-md-4">--}}
                     {{--<input  class="input" type="text" name="id" id="id_search" placeholder="search..."   @if(!empty($_GET['id']))  value="<?php echo $_GET['id']?>"  @endif />--}}

                {{--</td>--}}

                 {{--<td class="col-lg-3 col-md-4">--}}
                      {{--<input class="input" type="text" name="category" placeholder="search..."    @if(!empty($_GET['category']))  value="<?php echo $_GET['category']?>"  @endif />--}}

                 {{--</td>--}}

                 {{--<td class="col-lg-3 col-md-4">--}}
                     {{--<input class="input" type="text" name="title" placeholder="search..."   @if(!empty($_GET['title']))  value="<?php echo $_GET['title']?>"  @endif />--}}

                {{--</td>--}}

                 {{--<td class="col-lg-3 col-md-3">--}}
                     {{--<input class="input" type="text" name="description" placeholder="search..."  @if(!empty($_GET['description']))  value="<?php echo $_GET['description']?>"  @endif  />--}}

                {{--</td>--}}

         {{--</form>--}}

     {{--</tr>--}}

    {{--@foreach($all_posts as $post )--}}
       {{--<tr>--}}
           {{--<td> {{$post->id}}</td>--}}
           {{--<td>{{$post->section}}</td>--}}
           {{--<td>{{$post->title}}</td>--}}
           {{--<td>{{$post->description}}</td> <td><a href="{{route('single_view_from_table',['id'=>$post->id])}}"><i class="glyphicon glyphicon-eye-open"></i></a>     @if (Auth::check())<a href="{{route('edit.post',['id'=>$post->id])}}"><i class="glyphicon glyphicon-edit"></i></a> @endif </td>--}}
       {{--</tr>--}}
    {{--@endforeach--}}
    {{--</table>--}}
{{--<div style="text-align: center">--}}

{{--{{ $all_posts->appends(request()->input())->links()}}--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}


<hr style="border: 1px #5BC0DE solid">

{{--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
<?php //var_dump($sections_and_posts_for_cickle)?>
<!-- =========================
   //////////////This Theme Design and Developed //////////////////////
   //////////// by www.wpfreeware.com======================-->

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
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
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
                    <span>ALL NEWS</span>
                    <ul id="ticker01" class="news_sticker">


                        @foreach($all_posts as $post )
                            @if(Storage::disk('local')->has($post->title.'.jpg'))
                                <li><a href="{{route('single_view_from_table',['id'=>$post->id])}}"><img src="{{route('get.image',['filename'=>$post->title.'.jpg'])}}"  alt="">{{$post->title}}</a></li>
                            @else
                                <li><a href="{{route('single_view_from_table',['id'=>$post->id])}}"><img src="{{$post->image}}"  alt="">{{$post->title}}</a></li>
                            @endif
                        @endforeach

                    </ul>
                      {{--SOCIAL--}}
                    @include('layout/social')

                </div><!-- End news sticker -->
            </div>
        </div>
    </section>

    <!-- start slider section -->
    <section id="sliderSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <!-- Set up your HTML -->
                <div class="slick_slider">

                    @foreach($all_posts as $post )
                        @if(Storage::disk('local')->has($post->title.'.jpg'))
                             <div class="single_iteam">
                                 <a style="width:40%;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" href="{{route('single_view_from_table',['id'=>$post->id])}}"><img src="{{route('get.image',['filename'=>$post->title.'.jpg'])}}"  alt="">{{$post->title}}</a>

                                <div class="slider_article">
                                    <h2 style="width:40%;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><a class="slider_tittle" href="{{route('single_view_from_table',['id'=>$post->id])}}">{{$post->title}}</a></h2>
                                    <p style="width:40%;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"> {{$post->description}}</p>
                                </div>
                            </div>
                        @else
                            <div class="single_iteam">
                                <a style="width:40%;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" href="{{route('single_view_from_table',['id'=>$post->id])}}"><img src="{{$post->image}}"  alt="">{{$post->title}}</a>

                                <div class="slider_article">
                                    <h2 style="width:40%;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><a class="slider_tittle" href="{{route('single_view_from_table',['id'=>$post->id])}}">{{$post->title}}</a></h2>
                                    <p style="width:40%;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"> {{$post->description}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            {{--LATEST POSTS--}}
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                    <h2><span>Latest post</span></h2>
                    <div class="latest_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="latest_postnav">
                            <li>
                                @foreach($latest2posts as $lp)
                                   <div class="media">
                                       @if(Storage::disk('local')->has($lp->title.'.jpg'))
                                            <a href="{{route('single_view_from_table',['id'=>$lp->id])}}" class="media-left">
                                                <img alt="img" src="{{route('get.image',['filename'=>$lp->title.'.jpg'])}}">
                                            </a>
                                            <div class="media-body">
                                                <a href="#" class="catg_title"> {{$lp->title}}</a>
                                            </div>
                                        @else
                                           <a href="{{route('single_view_from_table',['id'=>$lp->id])}}" class="media-left">
                                               <img alt="img" src="{{$lp->image}}">
                                           </a>
                                           <div class="media-body">
                                               <a href="{{route('single_view_from_table',['id'=>$lp->id])}}" class="catg_title"> {{$lp->title}}</a>
                                           </div>
                                       @endif
                                    </div>
                                @endforeach
                            </li>



                        </ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End slider section -->
    <!-- =========================
     //////////////This Theme Design and Developed //////////////////////
     //////////// by www.wpfreeware.com======================-->

    <!-- ==================start content body section=============== -->
    <?php $i=0?>
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">

                    @foreach($all_sections as $section)
                        <?php $i++?>
                              @if( $i % 3   == 1 )

                            <div class="single_post_content">
                                <h2><span>{{$section->section}}</span></h2>
                                <div class="single_post_content_left">
                                    <ul class="business_catgnav  wow fadeInDown">
                                        <li>
                                            <figure class="bsbig_fig">
                                               @include('layout/news_last')
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="spost_nav">
                                    <div class="single_post_content_right">
                                        @include('layout/news_small')
                                    </div>
                                </ul>


                            </div>

                    @endif

                            @if($i % 3   == 0 or $i % 3   == 2)
                                <div>

                                    @if($i % 3 == 2)
                                        <div class="fashion">
                                            <div class="single_post_content">
                                            <h2><span>{{$section->section}}</span></h2>
                                                <ul class="business_catgnav wow fadeInDown">
                                                    <li>
                                                        <figure class="bsbig_fig">
                                                            @include('layout/news_last')
                                                        </figure>
                                                        <ul class="spost_nav">
                                                            @include('layout/news_small')
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    @if($i % 3 == 0)
                                            <div class="technology">
                                                <div class="single_post_content">
                                                <h2><span>{{$section->section}}</span></h2>
                                                    <ul class="business_catgnav">
                                                        <li>
                                                            <figure class="bsbig_fig wow fadeInDown">
                                                              @include('layout/news_last')
                                                            </figure>
                                                            <ul class="spost_nav">
                                                                @include('layout/news_small')
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    @endif
                                </div>
                            @endif




                    @endforeach


                    {{--<!-- start 2 style category design -->--}}
                    {{--<div class="fashion_technology_area">--}}
                        {{--<div class="fashion">--}}
                            {{--<div class="single_post_content">--}}
                                {{--<h2><span>Airplanes</span></h2>--}}
                                {{--<ul class="business_catgnav wow fadeInDown">--}}
                                    {{--<li>--}}
                                        {{--<figure class="bsbig_fig">--}}
                                            {{--<a href="{{route('single_view_from_table',['id'=>$last_airplane->id])}}" class="featured_img">--}}
                                                {{--<img alt="img" src="{{route('get.image',['filename'=>$last_airplane->title.'.jpg'])}}">--}}
                                                {{--<span class="overlay"></span>--}}
                                            {{--</a>--}}
                                            {{--<figcaption>--}}
                                                {{--<a href="{{route('single_view_from_table',['id'=>$last_airplane->id])}}">{{$last_airplane->title}}</a>--}}
                                            {{--</figcaption>--}}
                                            {{--<p>{{$last_airplane->description}}</p>--}}
                                        {{--</figure>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="spost_nav">--}}

                                    {{--@foreach($airplanes as $plane)--}}


                                    {{--<li>--}}
                                        {{--<div class="media wow fadeInDown">--}}
                                            {{--<a href="{{route('single_view_from_table',['id'=>$plane->id])}}" class="media-left">--}}
                                                {{--<img alt="img" src="{{route('get.image',['filename'=>$plane->title.'.jpg'])}}">--}}
                                            {{--</a>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<a href="{{route('single_view_from_table',['id'=>$plane->id])}}" class="catg_title">   {{$plane->title}}</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<div class="technology">--}}
                            {{--<div class="single_post_content">--}}
                                {{--<h2><span>Technology</span></h2>--}}
                                {{--<ul class="business_catgnav">--}}
                                    {{--<li>--}}
                                        {{--<figure class="bsbig_fig wow fadeInDown">--}}
                                            {{--<a href="{{route('single_view_from_table',['id'=>$last_technology->id])}}" class="featured_img">--}}
                                                {{--<img alt="img" src="{{route('get.image',['filename'=>$last_technology->title.'.jpg'])}}">--}}
                                                {{--<span class="overlay"></span>--}}
                                            {{--</a>--}}
                                            {{--<figcaption>--}}
                                                {{--<a href="{{route('single_view_from_table',['id'=>$last_technology->id])}}">{{$last_technology->title}}</a>--}}
                                            {{--</figcaption>--}}
                                            {{--<p>{{$last_technology->description}}</p>--}}
                                        {{--</figure>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="spost_nav">--}}


                                    {{--@foreach($technology as $tech)--}}
                                        {{--<li>--}}
                                            {{--<div class="media wow fadeInDown">--}}
                                                {{--<a href="{{route('single_view_from_table',['id'=>$tech->id])}}" class="media-left">--}}
                                                    {{--<img alt="img" src="{{route('get.image',['filename'=>$tech->title.'.jpg'])}}">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<a href="{{route('single_view_from_table',['id'=>$tech->id])}}" class="catg_title"> {{$tech->title}}</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- End 2 style category design -->
                    <!-- start photography stye design -->
                    <div class="single_post_content">
                        <h2><span>Photography</span></h2>
                        <ul class="photograph_nav  wow fadeInDown">

                            @foreach($images as $image)
                                @if(Storage::disk('local')->has($image->title.'.jpg'))
                                    <li>
                                        <div class="photo_grid">
                                            <figure class="effect-layla">
                                                <a class="fancybox-buttons" data-fancybox-group="button"   href="{{route('single_view_from_table',['id'=>$image->id])}}" title="Photography Ttile 6">
                                                    <img src="{{route('get.image',['filename'=>$image->title.'.jpg'])}}" alt="img06"/>
                                                </a>
                                            </figure>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <div class="photo_grid">
                                            <figure class="effect-layla">
                                                <a class="fancybox-buttons" data-fancybox-group="button"   href="{{route('single_view_from_table',['id'=>$image->id])}}" title="Photography Ttile 6">
                                                    <img src="{{$image->image}}" alt="img06"/>
                                                </a>
                                            </figure>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- End photography stye design -->
                    <!-- start games category design -->
                    <div class="single_post_content">
                        <h2><span>Games</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav">
                                <li>
                                    <figure class="bsbig_fig  wow fadeInDown">
                                        <a class="featured_img" href="single_page.html">
                                            <img src="img/featured_img1.jpg" alt="img">
                                            <span class="overlay"></span>
                                        </a>
                                        <figcaption>
                                            <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                                        </figcaption>
                                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content_right">
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
                    <!-- End games category design -->
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
                        <a class="sideAdd" href="#"><img src="{{URL::asset('img/Tire_Brands_Nokian.jpg')}}" alt="img"></a>
                    </div>
                    <!-- End sponsor add -->
                    <!-- Category Archive -->
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Category Archive</span></h2>
                        <select  class="catgArchive" name="forma" onchange="location = this.value;">
                            <option>Select Category</option>
                            <option value="">@include('layout/sections')</option>

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
