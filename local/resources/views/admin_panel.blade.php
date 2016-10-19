@extends('welcome')

@section('admin_panel')
{{--HEADER--}}

<script type="text/javascript" src="{{ URL::asset('js/sortable.js') }}"></script>

                   @section('admin_panel_header')
                       <li><a href="{{route('news')}}">NEWS</a></li>
                       <li><a href="{{route('settings')}}">Settings</a></li>
                   @stop





{{--END HEADER--}}
<div class="row ">

{{--STASRT CREATE CATEGORY--}}



        <div >
            <div class="col-md-offset-1 col-md-2">
                <form action="{{route('create_section')}}" method="post">
                    {{ csrf_field() }}
                    <h2 class="form-signin-heading">Create Category</h2>
                    <hr style="border:1px solid #337AB7;" >
                <div class="form-group"> <!-- Name field -->
                    <label class="control-label " for="name">Category</label>
                    <input required name="section" class="form-control" id="name"  type="text"/>

                </div>

                <div class="form-group">
                    <button class="btn btn-primary  btn-block" name="submit" type="submit">Create</button>
                </div>

            </form>

            </div>
        </div>

{{--END CREATE CATEGORY--}}

{{--START CREATING POSTS--}}
        <div  >
            <div class="col-md-offset-1 col-lg-4">

        <form action="{{route('postnews')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h2 class="form-signin-heading">Create Post</h2>
            <hr style="border:0.1px solid #337AB7;" >
            <div class="form-group"> <!-- Name field -->
                <label class="control-label " for="title">Title</label>
                <input required  class="form-control" id="title" name="title" type="text"/>
            </div>


            <div class="form-group"> <!-- Name field -->
                <label class="control-label " for="description">Description</label>
                <textarea  required  class="form-control" id="description" name="description" type="text" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image(Only .jpg)</label>
                <input type="file" name="image" id="image" class="form-control" >
            </div>


         <ul id="sortable" >
          @foreach($news as $n )
              <li id="{{$n->id}}">
                    <div class="container">
                        <div class="col-sm-4">
                            <div class="checkbox">
                                <label>
                                   <input type="checkbox" name="check_list[]" value="{{$n->id}}" > {{$n->section}}
                                   <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>

                                 </label>
                            </div>
                       </div>
                    </div>
              </li>
          @endforeach
         </ul>

            <div class="form-group">
                <button class="btn btn-primary  btn-block" name="submit" type="submit">Create</button>
            </div>

        </form>

            </div>
        </div>
{{--END CREATING POSTS--}}

</div>

@stop
