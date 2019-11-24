@extends('layout')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">{{$vista->title}}</h1>
        <p class="lead">{{$vista->body}}</p>
        <hr class="my-4">
        <p>{{$vista->date}}</p>
        @if(Auth::user() == $vista->creator)
            @auth
                <a class="btn btn-primary btn-lg" href="/vistas/{{$vista->hash}}/edit" role="button">Edit</a>
                <form action="/vistas/{{$vista->hash}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            @endauth
        @else
            <a class="btn btn-primary btn-lg" href="" role="button">I'll be there!</a>
            <a class="btn btn-primary btn-lg" href="" role="button">Can't make it!</a>
        @endif

    </div>

@endsection
