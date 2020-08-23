<div class="modal fade" id="createUserModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">@include('pages.message')</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container col-sm-12">
					<div class="container col-sm-12">
						<form class="form-group" method="POST" action="{{route('addUser')}}">
							@csrf
							<div class="form-group">
								<label for="name">Enter Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter name here..." required="">
							</div>
							<div class="form-group">
								<label for="email">Enter Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email here..." required="">
							</div>
							<div class="form-group">
								<label for="password">Enter Password</label>
								<input type="password" class="form-control" id="password" name="password" required="">
							</div>
							<div class="form-group">
								<label for="re-password">Confirm Password</label>
								<input type="password" class="form-control" id="re-password" name="password_confirmation" required="">
							</div>
							<div class="form-group">
							<label for="category_id">Select User Type</label>
							<select class="form-control" id="userType" name="userType">
								<option value="">Select</option>
								<option value="user">user</option>
								<option value="admin">admin</option>
							</select>
						</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Save Post</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
