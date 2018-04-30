@extends('layouts.master')
@section('content')
    @if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">{{Session::get('info')}}</p>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.create')}}" class="btn btn-primary">New Post</a>
            <p>Learning laravel <a href="{{route('admin.edit', ['id' => 1])}}">Edit Post</a></p>
        </div>
    </div>
@endsection