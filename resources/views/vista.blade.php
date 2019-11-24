@extends('layout')

@section('content')

    <div class="jumbotron px-5 mx-5 mt-5">
        <h1 class="display-4">{{$vista->title}}</h1>
        <p class="lead">{{$vista->body}}</p>
        <hr class="my-4">
        <p>Date of the event: {{$vista->date}}</p>
        <hr class="my-4">
        <p>This many people will be there: </p>
        <p class="js-rsvp-yes-count">{{$vista->rsvp_yes}}</p>
        <p>This many people can't make it: </p>
        <p class="js-rsvp-no-count">{{$vista->rsvp_no}}</p>
        <hr class="my-4">
        @if(Auth::user() == $vista->creator)
            @auth
                <div class="form-group row">
                    <a class="btn btn-primary btn-lg mx-1" href="/vistas/{{$vista->hash}}/edit" role="button">Edit</a>
                    <form action="/vistas/{{$vista->hash}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary btn-lg mx-1">Delete</button>
                    </form>
                </div>
            @endauth
        @else
            <div class="form-group row">
                <a class="btn btn-primary btn-lg js-rsvp-yes mx-1" href="/vistas/{{$vista->hash}}/rsvp_yes" role="button">I'll
                    be
                    there!</a>
                <a class="btn btn-primary btn-lg js-rsvp-no mx-1" href="/vistas/{{$vista->hash}}/rsvp_no" role="button">Can't
                    make it!</a>
            </div>
        @endif

    </div>



@endsection

@section('scripts')

    @parent
    <script src="/js/vista_show.js"></script>

@endsection
