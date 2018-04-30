@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="modal-title">Learning Laravel</h1>
            <p>This blog post will get you right on</p>
            <p><a href="{{route('blog.post', ['id' => 1])}}">Read more..</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="modal-title">The New steps of Laravel</h1>
            <p>Next steps  blog post will get you right on</p>
            <p><a href="{{route('blog.post', ['id' => 2])}}">Read more..</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="modal-title">Third post of Laravel</h1>
            <p>Third  blog post will get you right on</p>
            <p><a href="{{route('blog.post', ['id' => 3])}}">Read more..</a></p>
        </div>
    </div>
@endsection