@extends('welcome')


@section('admin_settings')


<div class="container " >
    <div class="row">



        <div class="col-lg-4">
            <form action="{{route('social')}}" method="POST">
                {{ csrf_field() }}

                <h2 class="form-signin-heading">Social Lists</h2>
                <input type='hidden' name="_method" value="PUT">

                  <div class="form-group">
                      facebook:<input type="text" name="facebook" class="form-control" value="{{$locations->facebook}}" >
                  </div>

                  <div class="form-group">
                     twitter:<input type="text" name="twitter" class="form-control" value="{{$locations->twitter}}">
                  </div>

                  <div class="form-group">
                        flickr:<input type="text" name="flickr" class="form-control" value="{{$locations->flickr}}">
                  </div>

                  <div class="form-group">
                       pinterest:  <input type="text" name="pinterest" class="form-control" value="{{$locations->pinterest}}">
                  </div>

                  <div class="form-group">
                              googleplus: <input type="text" name="googleplus" class="form-control" value="{{$locations->googleplus}}">
                  </div>

                  <div class="form-group">
                       vimeo:<input type="text" name="vimeo" class="form-control" value="{{$locations->vimeo}}" >
                  </div>

                  <div class="form-group">
                             youtube:    <input type="text" name="youtube" class="form-control" value="{{$locations->youtube}}">
                  </div>

                  <div class="form-group">
                       mail:<input type="text" name="mail" class="form-control" value="{{$locations->mail}}">
                  </div>

                <button class="btn btn-primary  btn-block" name="submit" type="submit">Set</button>


            </form>
        </div>






        <div class="col-lg-8">

                <form action="{{route('post.baner')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <h2 class="form-signin-heading">Change baner</h2>
                    <div class="form-group">
                        <label for="image">Image(Only .jpg)</label>
                        <input type="file" name="image" id="image" class="form-control" >
                    </div>

                    <button class="btn btn-primary  btn-block" name="submit" type="submit">Change</button>
            </form>


            @include('layout/baner')


    </div>
</div>




   
    @stop