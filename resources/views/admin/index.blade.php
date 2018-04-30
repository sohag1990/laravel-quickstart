@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.create')}}" class="btn btn-primary">New Post</a>
            <p>Learning laravel <a href="{{route('admin.edit', ['id' => 1])}}">Edit Post</a></p>
        </div>
    </div>
@endsection