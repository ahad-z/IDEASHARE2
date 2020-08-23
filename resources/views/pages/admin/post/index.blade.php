@extends('layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col"><h5>All Posts</h5></div>
		</div>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>#ID</th>
					<th>Title</th>
					<th>Posted By</th>
					<th>Is Approved</th>
					<th>Posted At</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->user->name }}</td>
						<td>
							<input class="postStatus" type="checkbox" data-toggle="toggle" data-on="Approve" data-off="UnApprove" data-id="{{$post->id}}" {{$post->status==1? 'checked' : ''}}>
						</td>
						<td>{{ $post->created_at->diffForHumans() }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection

@push('scripts')
<script>
	$('body').on('change', '.postStatus', function() {
	    var id = $(this).attr('data-id');

	    console.log(id);

	    if (this.checked) {
	        var status = 1;
	     }else {
	        var status = 0;
	    }
	        $.ajax({
	            url         : `posts/postStatus/${id}/${status}`,
	            type        : "GET",
	            dataType    : "JSON",
	            "beforeSend" : function(){

	            },
	            "success"    : function(data){
	                console.log(data)
	            },
	            "error"         : function(){

	            }
	        });
	    });

</script>
@endpush
