@foreach($news as $n )
    <li><a href="{{route('show.news',['id'=>$n->id])}}"><?= $n->section; ?></a></li>
@endforeach