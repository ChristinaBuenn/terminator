@extends('layout')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">{{$vista->title}}</h1>
        <p class="lead">{{$vista->body}}</p>
        <hr class="my-4">
        <p>{{$vista->date}}</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

@endsection
