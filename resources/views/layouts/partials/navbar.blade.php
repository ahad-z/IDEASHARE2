<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="/">IdeaShare</a>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				@if(auth()->check())
					@if(auth()->user()->type == 'user')
						<li class="nav-item"><a class="nav-link" href="#createPostModal" data-toggle="modal">Post an idea</a></li>
					@else
						<li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}">Categories</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}">Posts</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">All Users</a></li>
					@endif
					<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>

				@else
				<form class="form-inline my-2 my-lg-0 form-group" method="GET" action="{{route('home') }}">

							<select style="margin-right: 10px;" class="form-control" id="category_id" name="category_id">
								<option>Selecet Category</option>
								@foreach($categories as $cat)
								<option value="{{ $cat->id }}">{{ $cat->name }}</option>
								@endforeach
							</select>
					<!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">Register</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
