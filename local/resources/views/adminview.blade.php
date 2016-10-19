@extends('welcome')

@section('adminview')



    <div class="container" >
        <div class="row col-lg-12" style="text-align: center">
            @if(!empty($message))

                   <p class="bg-danger">{{$message}}</p>

            @endif
        </div>
    </div>

    @if(count($errors)>0)
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @foreach($errors->all() as $error)
                        <p class="bg-danger" >{{$error}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-3">
                <form class="form-signin" action="{{ route('admin_post') }}" method="post">
                    {{ csrf_field() }}
                    <h2 class="form-signin-heading">Please log in</h2>
                   <div class="form-group {{$errors->has('adminname')? 'has-error' : ''}}">
                        <label for="adminname" class="sr-only">Username</label>
                        <input type="text" id="adminname" name="adminname" class="form-control" placeholder="Username" required autofocus>
                   </div>
             <br>
                    <div class="form-group {{$errors->has('adminname')? 'has-error' : ''}}">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
              <br>
                        <button class="btn  btn-primary btn-block" type="submit">Sign in</button>

                </form>
            </div>
         </div>
        </div> <!-- /container -->


@stop
