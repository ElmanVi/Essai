@extends('layouts.app')

@section('content')
	<form action="{{route('info.store')}}" method="POST">
		{{csrf_field()}}
		
		@include('info._form')
	</form>
	<a href="{{route('Home')}}">Home page</a>
	
@endsection