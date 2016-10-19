@extends('welcome')

@section('edit_post')
    <div class="container">

            <div class="col-md-offset-1 col-lg-8">


        <form action="{{route('update.post',['id'=>$post->id])}}" method="POST">
            {{ csrf_field() }}
            <input type='hidden' name="_method" value="PUT">
            <h2 class="form-signin-heading">Change Post</h2>
            <div class="form-group"> <!-- Name field -->
                <label class="control-label " for="name">Title:</label>
                <input required name="title" class="form-control" id="title"  type="text" value="{{$post->title}}"/>

            </div>

            <div class="form-group"> <!-- Name field -->
                <label class="control-label " for="description"> Description::</label>
                <textarea rows="5" required name="description" class="form-control" id="description"  > {{$post->description}}</textarea>
            </div>




            @foreach($sections as $section)
                 <div class="container">
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        {{$section->section}}
                                        <label>
                                            <input type="checkbox" @foreach($post_id as $id) @if($section->section==$id->section) checked="checked"   @endif @endforeach name="check_list[]" value="<?= $section->id;?>" >
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
            @endforeach



            <div class="form-group">
                <button class="btn btn-primary  btn-block" name="submit" type="submit">Update</button>
            </div>


        </form>

   </div>
 </div>

@stop
