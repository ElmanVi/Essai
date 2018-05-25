@extends('layouts.app')

@section('content')
 <!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
          	<div class="col-lg-8 col-md-10 mx-auto">
            	<div class="site-heading">
              		<h1>Clean Blog</h1>
              		<span class="subheading">A Blog Theme by Start Bootstrap</span>
            	</div>
          	</div>
        </div>
    </div>
</header>
<div class="container">
	<div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
        </div>
    </div>
	<div class="row">
	@foreach($infos as $info)
	    <div class="col-md-4 mb-4">
	        <div class="card h-100">
	            <div class="card-body">
	            	<h4 class="card-title">{{$info->title}}</h4>
	             	<p class="card-text">{{$info->description}}</p>
	            </div>
	            <div class="card-footer">
	              <a href="{{$info->url}}" class="btn btn-primary">More Info</a>
	            </div>
	        </div>
	    </div>
	        <!-- /.col-md-4 -->
	@endforeach        <!-- /.col-md-4 -->
	</div>
	{{$infos->links()}}
	          <div class="clearfix">
	            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
	          </div>
</div>
@endsection