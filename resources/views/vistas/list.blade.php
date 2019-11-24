@extends('layout')

@section('content')

    <div class="list-group">
        @foreach($vistas as $vista)
        <a href="/vistas/{{$vista->hash}}" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$vista->title}}</h5>
            </div>
            <p class="mb-1">{{$vista->body}}</p>
            <small>{{$vista->date}}</small>
        </a>
        @endforeach
    </div>

@endsection
