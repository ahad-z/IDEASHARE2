@extends('layouts.app');
@section('content')
<div class="container col-sm-6">
     @include('pages.message')
     <a style="margin-left: 500px; margin-top:5px;" class="btn btn-primary btn-sm" href="{{ route('manage_post') }}">All Post!</a>
    <form class="form-group" method="POST" action="{{route('save_post')}}">
         @csrf
         <input type="hidden" name="name" value="{{ Auth::user()->name}}">
          <div class="form-group">
            <label for="category_id">Select Category</label>
            <select class="form-control" id="category_id" name="category_id">
                <option value="">Select</option>
                @foreach($category as $data)
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
        </div>
    </form>
</div>
@endsection
