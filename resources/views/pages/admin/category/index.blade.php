@extends('layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col"><h5>All Categories</h5></div>
			<div class="col text-right">
				<a class="btn btn-primary btn-sm" href="#modalAddUser" data-toggle="modal">Create Category</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>#ID</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $category->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="modalAddUser">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Create Category</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-group" method="POST" action="{{route('categories.store')}}">
					@csrf

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" required="">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

