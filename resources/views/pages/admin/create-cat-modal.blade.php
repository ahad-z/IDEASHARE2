@extends('layouts.app');
@section('content')
<div class="container col-sm-8">
     @include('pages.message')
     <a style="margin-left: 400px; margin-top: -5px;" class="btn btn-primary btn-sm" href="{{ route('mange_category') }}">All Category!</a>
    <form class="form-group" method="POST" action="{{route('save_category')}}">
        @csrf
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input class="form-control col-sm-8" type="text" id="category_name" name="category_name" placeholder="Enter Your Category..." required="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save category</button>
        </div>
    </form>
</div>
@endsection
