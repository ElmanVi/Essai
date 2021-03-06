<!DOCTYPE html>
<html>
    <head>
        <title>Mon application</title>
        <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/clean-blog.min.css')}}" rel="stylesheet">
    <link rel="icon" href="../../../../favicon.ico">
    


    </head>
    <body>
        @include('layouts.partials._nav')
        <div ass="slider">
            @yield('content')
        </div>
        


        <!-- Bootstrap core JavaScript -->
    <script src="{{asset('/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('/js/clean-blog.min.js')}}"></script>
    </body>
</html>


                                