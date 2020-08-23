<div class="modal fade" id="createCatModal">
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
						<form class="form-group" method="POST" action="{{route('save_category')}}">
							@csrf
							<div class="form-group">
								<label for="category_name">Category Name</label>
								<input class="form-control col-sm-12" type="text" id="category_name" name="category_name" placeholder="Enter Your Category..." required="">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Save category</button>
							</div>
						</form>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
