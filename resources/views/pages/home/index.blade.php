@extends('layouts.master')
@section('content')
	@foreach($posts as $post)
		@include('components.post-item')
	@endforeach
@endsection
