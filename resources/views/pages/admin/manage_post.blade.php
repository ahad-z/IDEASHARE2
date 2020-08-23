@extends('layouts.app');
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 style="text-align: center;">All Post!</h5>
            <a style="float: right; margin-top: 0px;" class="btn btn-primary btn-sm" href="#createPostModal" data-toggle="modal">Add Post!</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">post Title</th>
                        <th scope="col">post Content</th>
                        <th scope="col">post By</th>
                        <th scope="col">Approve Status</th>
                    </tr>
                </thead>
                <tbody>
                     @php($i=1)
                    @foreach($post as $data)
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$data->title}}</td>
                        <td>{{$data->content}}</td>
                        <td>{{$data->name}}</td>
                        <td><input type="checkbox" data-toggle="toggle" data-on="Approve" data-off="UnApprove" id="postStatus" data-id="{{$data->id}}" {{$data->status==1?'checked' : ''}}></td>
                    </tr>
                    @php($i++)
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
