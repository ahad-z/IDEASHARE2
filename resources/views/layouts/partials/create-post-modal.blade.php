<div class="modal fade" id="createPostModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Modal title</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container col-sm-12">
					<form class="form-group" method="POST" action="{{route('save_post')}}">
						@csrf
						<input type="hidden" name="name" value="{{auth()->user()->name}}">
						<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
						<div class="form-group">
							<label for="category_id">Select Category</label>
							<select class="form-control" id="category_id" name="category_id">
								<option value="">Select</option>
								@foreach($categories as $data)
								<option value="{{$data->id}}">{{$data->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="title">Post Title</label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Enter title here..." required="">
						</div>
						<div class="form-group">
							<label for="content">type your Post Content Here!</label>
							<textarea class="form-control" id="content" name="content" rows="3"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Save Post</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
