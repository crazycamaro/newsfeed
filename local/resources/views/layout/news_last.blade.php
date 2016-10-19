    @foreach($sections_and_posts_for_cickle as $k)
        @if($k->section == $section->section)
            <?php $array[] = $k;?>
        @endif
    @endforeach
            <?php $last = $array[count($array)-1];?> <br>
               @if(Storage::disk('local')->has($last->title.'.jpg'))
                    <a href="{{route('single_view_from_table',['id'=>$last->id])}}" class="featured_img">
                        <img alt="img" src="{{route('get.image',['filename'=>$last->title.'.jpg'])}}">
                        <span class="overlay"></span>
                    </a>
                    <figcaption>
                        <a href="{{route('single_view_from_table',['id'=>$last->id])}}"> {{$last->title}}</a>
                    </figcaption>
                    <p>{{$last->description}}</p>
                @else
                    <a href="{{route('single_view_from_table',['id'=>$last->id])}}" class="featured_img">
                        <img alt="img" src="{{$last->image}}">
                        <span class="overlay"></span>
                    </a>
                    <figcaption>
                        <a href="{{route('single_view_from_table',['id'=>$last->id])}}"> {{$last->title}}</a>
                    </figcaption>
                    <p>{{$last->description}}</p>
                @endif





