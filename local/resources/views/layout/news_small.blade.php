
@foreach($sections_and_posts_for_cickle as $k)
    @if($k->section == $section->section)


        @if(Storage::disk('local')->has($k->title.'.jpg'))
        {{--@foreach($cars as $car)--}}
        <li>
            <div class="media wow fadeInDown">

                <a href="{{route('single_view_from_table',['id'=>$k->id])}}" class="media-left">
                    <img alt="img" src="{{route('get.image',['filename'=>$k->title.'.jpg'])}}">
                </a>
                <div class="media-body" >
                    <a href="{{route('single_view_from_table',['id'=>$k->id])}}" class="catg_title"> {{$k->title}}</a>
                </div>

            </div>
        </li>

            @else
            <li>
                <div class="media wow fadeInDown">

                    <a href="{{route('single_view_from_table',['id'=>$k->id])}}" class="media-left">
                        <img alt="img" src="{{$k->image}}">
                    </a>
                    <div class="media-body" >
                        <a href="{{$k->link}}" class="catg_title"> {{$k->title}}</a>
                    </div>

                </div>
            </li>
        @endif
        {{--@endforeach--}}

    @endif
@endforeach