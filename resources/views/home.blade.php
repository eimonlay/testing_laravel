@extends('layout')



@section("content")
<h2>Home page</h2>
  
  @foreach($data as $value)
  	<li>Name - {{ $value->name}}</li>
  	<li>Ingredients - {{ $value->ingredients}}</li>
  	<li>Category - {{ $value->category}}</li>
  	<hr>
  @endforeach
@endsection