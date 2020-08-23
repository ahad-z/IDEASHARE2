<div class="post-item">
	<div class="card mb-3">
		<div class="d-flex align-items-center">
			<div class="text-center">
				<div class="row p-3">
					<div class="col-12">
						<span style="font-size: 13px">{{ $post->upvote_count }}</span>
						<div style="cursor: pointer;">
							 <!--  test-->
							@if(auth()->check())
							<form method="POST" action="{{route('votes.store')}}">
								@csrf
								<input type="hidden" name="post_id" value="{{$post->id}}">
								<input type="hidden" name="type" value="1">
								<input type="hidden" name="user_id" value="{{ auth()->id() }}">
								<button class="like">
								<a href="" id="{{$post->id}}" name="upvote"  class="vote"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
								</button>
								@else
								<button class="like">
								<a href="{{route('login')}}"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
								</button>
								@endif
							</form>
							<!--  test-->
							<!-- <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M3.204 11L8 5.519 12.796 11H3.204zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
							</svg> -->
						</div>
					</div>
					<div class="col-12">
						<div style="cursor: pointer;"><br>
							<!--  test-->
							@if(auth()->check())
							<form method="POST" action="{{route('votes.store')}}">
								@csrf
								<input type="hidden" name="post_id" value="{{$post->id}}">
								<input type="hidden" name="user_id" value="{{ auth()->id() }}">
								<input type="hidden" name="type" value="0">
								<button class="dislike">
								<a href="" id="{{$post->id}}" name="upvote"  class="vote"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
								</button>
								@else
								<button class="dislike">
								<a href="{{ route('login') }}"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
								</button>
								@endif
							</form>
							<!--  test-->
							<!-- <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
							</svg> -->
						</div>
						<span style="font-size: 13px">{{ $post->downvote_count }}</span>
					</div>
				</div>
			</div>
			<div class="">
				<div class="card-body">
					<h5><a class="text-decoration-none" href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h5>
					<div>
						<span class="text-muted">By <span class="text-dark">{{$post->user->name}}</span></span>
						|
						<span class="text-muted">
							Comments: <a href="{{ route('posts.show', $post->id) }}">{{ $post->comments->count() }}</a>
						</span>
						|
						<span class="text-muted">Category <span class="badge badge-info">{{$post->category->name}}</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@push('styles')
<style>
	button.like{
	width: 30px;
	height: 30px;
	margin: 0 auto;
	line-heigth: 50px;
	border-radius: 50%;
	color: rgba(0,150,136 ,1);
	background-color:rgba(38,166,154 ,0.3);
	border-color: rgba(0,150,136 ,1);
	border-width: 1px;
	font-size: 15px;
}

button.dislike{
	width: 30px;
	height: 30px;
	margin: 0 auto;
	line-heigth: 50px;
	border-radius: 50%;
	color: rgba(255,82,82 ,1);
	background-color: rgba(255,138,128 ,0.3);
	border-color: rgba(255,82,82 ,1);
	border-width: 1px;
	font-size: 15px;
}
</style>
@endpush
