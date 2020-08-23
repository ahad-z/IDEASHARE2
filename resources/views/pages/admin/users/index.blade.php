@extends('layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col"><h5>All Users</h5></div>
			<div class="col text-right">
				<a class="btn btn-primary btn-sm" href="#modalAddUser" data-toggle="modal">Create User</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>#ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Type</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ ucfirst($user->type) }}</td>
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
				<h4 class="modal-title">Create User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-group" method="POST" action="{{route('users.store')}}">
					@csrf

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" required="">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" required="">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" required="">
					</div>

					<div class="form-group">
						<label for="category_id">User Type</label>
						<select class="form-control" name="type">
							<option value="user">User</option>
							<option value="admin">Admin</option>
						</select>
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

