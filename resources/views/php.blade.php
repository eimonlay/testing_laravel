@extends('layout')

@section('title')
	php page
@endsection

@section('content')


	@foreach ($data as $key => $value)

		<li>{{ $value }} </li>

	@endforeach

@endsection

