@extends('layouts.master')
@section('title', $post->title)
@section('content')
<div>
	<div class="single-post">
		<h1>{{ $post->title }}</h1>
		<div class="mb-5 d-flex justify-content-between">
			<div class="d-flex items-center">
				<img src="https://api.adorable.io/avatars/56/{{ time() }}" class="rounded-circle">
				<div class="single-post-meta-details ml-3">
					<div class="single-post-meta-details-name">{{ $post->user->name }}</div>
					<div class="single-post-meta-details-date">{{ $post->created_at->format('M d') }} · {{ $post->created_at->diffForHumans() }}</div>
				</div>
			</div>
			<div class="d-flex">
				<div>

				</div>
			</div>
		</div>
		<div class="single-post-text my-5">
			{{ $post->content }}
		</div>

		<div>
			<hr>
		</div>
		<div >
			<div class="card">
				<div class="card-header">Add Reply</div>
				<div class="card-body">
					<form action="{{ route('comments.store') }}" method="post">
						@csrf
						@if(auth()->check())
							<input type="hidden" name="post_id" value="{{ $post->id  }}">
							<input type="hidden" name="user_id" value="{{ auth()->id()  }}">
						@endif

						<textarea rows="4" class="form-control mb-2" name="body" spellcheck="false"></textarea>

						@if(auth()->check())
							<button class="btn btn-primary btn-sm mr-2">Add Reply</button>
						@else
							<a class="btn btn-primary btn-sm mr-2" href="{{ route('login') }}">Add Reply</a>
						@endif
					</form>
				</div>
			</div>
		</div>

		<div class="mb-5">
			<hr>

			@foreach($post->comments as $comment)
				<div class="card mb-5">
					<div class="card-header d-flex justify-content-between">
						<div class="mr-2 text-dark">
							{{ $comment->user->name  }}
							<div class="text-xs text-muted">{{ $comment->created_at->diffForHumans()  }}</div>
						</div>
					</div>
					<div class="card-body">
						{{ $comment->body  }}
					</div>
				</div>
			@endforeach
		</div>
	</div>

</div>
@endsection
@push('styles')
	<style>
		.card {
			display: -webkit-box;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			flex-direction: column;
			min-width: 0;
			word-wrap: break-word;
			background-color: #fff;
			background-clip: border-box;
			border: 0 solid rgba(0,0,0,.125);
			border-radius: .35rem;
		}
		.card {
			box-shadow: 0 0.15rem 1.75rem 0 rgba(31,45,65,.15);
			overflow: hidden;
			position: relative;
		}

	</style>
@endpush
