@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5 style="text-align: center;">{{ 'Welacome'}} {{ Auth::user()->name }}</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 style="text-align: center;">{{ __('Now U can Change Everything!') }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
