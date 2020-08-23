@extends('layouts.master');
@section('content')
<div class="container col-sm-4">
	<div class="card">
		<div class="card-header">
			<h5 style="margin-left:5px;">All User!</h5>
			<a style="float: right; margin-top: 0px;" class="btn btn-primary btn-sm" href="#createCatModal" data-toggle="modal">Add Category!</a>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">Sl</th>
						<th scope="col">User Name</th>
						<th scope="col">User Email</th>
						<th scope="col">User Type</th>
					</tr>
				</thead>
				@php($i=1)
				@foreach($$user as $data)
				<tbody>
					<tr>
						<th scope="row">{{$i}}</th>
						<td>{{$data->name}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->type}}</td>
					</tr>
				</tbody>
				@php($i++)
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection
