<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- for news ticker css file -->
    <link href="{{URL::asset('css/li-scroller.css')}}" rel="stylesheet">
    <!-- slick slider css file -->
    <link href="{{URL::asset('css/slick.css')}}" rel="stylesheet">
    <!-- for fancybox slider -->
    <link href="{{URL::asset('css/jquery.fancybox.css')}}" rel="stylesheet">
    <!-- website theme file -->
    <!-- <link href="css/theme-red.css" rel="stylesheet"> -->

    <link href="{{URL::asset('css/theme.css')}}" rel="stylesheet">
    <!-- main site css file -->
    <link href="{{URL::asset('style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
 <body>



 <nav class="navbar navbar-default">
     <div class="container-fluid ">

         <div >
             <ul class="nav navbar-nav ">
                 @if (Auth::check()) <li class="navbar-brand">WELCOME ADMIN <span class="sr-only">(current)</span></li> @endif
                @yield('admin_panel_header')
                 @yield('news_header')

             </ul>

             @if (Auth::check())
                 <ul class="nav navbar-nav navbar-right">
                 <li>  <a href="{{route('logout')}}">Log Out</a></li>
             </ul>
             @endif
         </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
 </nav>



    @yield('admin_panel')
    @yield('edit_post')
    @yield('single_news')
    @yield('news')
    @yield('adminview')
    @yield('single_view_from_table')
    @yield('404')
    @yield('contact')
    @yield('all_posts')
    @yield('admin_settings')







            <!-- For content animatin  -->
 <script src="{{URL::asset('js/wow.min.js')}}"></script>
 <!-- bootstrap js file -->
 <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
 <!-- slick slider js file -->
 <script src="{{URL::asset('js/slick.min.js')}}"></script>
 <!-- news ticker jquery file -->
 <script src="{{URL::asset('js/jquery.li-scroller.1.0.js')}}"></script>
 <!-- for news slider -->
 <script src="{{URL::asset('js/jquery.newsTicker.min.js')}}"></script>
 <!-- for fancybox slider -->
 <script src="{{URL::asset('js/jquery.fancybox.pack.js')}}"></script>
 <!-- custom js file include -->
 <script src="{{URL::asset('js/custom.js')}}"></script>


 </body>
</html>


















