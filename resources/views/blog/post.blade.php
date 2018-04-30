@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
           <h1 class="modal-title">{{ $post['title'] }}</h1>
            <p class="text-justify">{{$post['content']}}</p>
        </div>
    </div>
@endsection