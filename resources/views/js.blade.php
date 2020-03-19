@extends('layout')

@section('title')
	js page
@endsection

@section('content')


	@foreach ($data as $key => $value)

		<li>{{ $value }} </li>


	@endforeach

@endsection

