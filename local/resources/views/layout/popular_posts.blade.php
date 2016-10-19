<div class="single_sidebar">
    <h2><span>Popular Post</span></h2>
    <ul class="spost_nav">
        @foreach($popular_posts as $popular)
            <li>
                <div class="media wow fadeInDown">
                    <a href="{{route('single_view_from_table',['id'=>$popular->id])}}" class="media-left">
                        <img alt="img" src="{{route('get.image',['filename'=>$popular->title.'.jpg'])}}">
                    </a>
                    <div class="media-body">
                        <a href="{{route('single_view_from_table',['id'=>$popular->id])}}" class="catg_title"> {{$popular->title}}</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>