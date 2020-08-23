@extends('layouts.master');
@section('content')
<div class="container col-sm-4">
	<div class="card">
		<div class="card-header">
			<h5 style="margin-left:5px;">All Categgory!</h5>
			<a style="float: right; margin-top: 0px;" class="btn btn-primary btn-sm" href="#createCatModal" data-toggle="modal">Add Category!</a>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">Sl</th>
						<th scope="col">Category Name</th>
					</tr>
				</thead>
				@php($i=1)
				@foreach($cate as $data)
				<tbody>
					<tr>
						<th scope="row">{{$i}}</th>
						<td style="text-align: center;">{{$data->name}}</td>
					</tr>
				</tbody>
				@php($i++)
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection
