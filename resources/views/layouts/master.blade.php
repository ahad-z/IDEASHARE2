<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     @stack('styles')
	  <title>@yield('title') - IdeaShare</title>
  </head>
  <body>
    @include('layouts.partials.navbar')

	<div class="container mt-4">
	    @yield('content')
	</div>

	@if(Auth::check())
	    @include('layouts.partials.create-post-modal')
	    @include('layouts.partials.create-cat-modal')
	    @include('layouts.partials.add-user-modal')
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  	@stack('scripts')

  	<script type="text/javascript">
  		$(document).ready(function(){
  			@if (session()->has('success'))
				toastr.success(`{{ session()->get('success') }}`)
			@elseif (session()->has('error'))
				toastr.error(`{{ session()->get('error') }}`)
  			@endif
  		});
  	</script>
  </body>
</html>
