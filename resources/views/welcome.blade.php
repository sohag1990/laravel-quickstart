@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>some content</h1>
            <p>{{ 2 == 2 ? "Hello" : "Dose Not equal" }}</p>
        </div>
    </div>
@endsection