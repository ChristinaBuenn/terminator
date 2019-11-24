@extends('layout')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">{{$vista->title}}</h1>
        <p class="lead">{{$vista->body}}</p>
        <hr class="my-4">
        <p>{{$vista->date}}</p>
        <p class="js-rsvp-yes-count">{{$vista->rsvp_yes}}</p>
        <p class="js-rsvp-no-count">{{$vista->rsvp_no}}</p>
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
        @endif
            <a class="btn btn-primary btn-lg js-rsvp-yes" href="/vistas/{{$vista->hash}}/rsvp_yes" role="button">I'll be there!</a>
            <a class="btn btn-primary btn-lg js-rsvp-no" href="/vistas/{{$vista->hash}}/rsvp_no" role="button">Can't make it!</a>

    </div>



@endsection

@section('scripts')

    @parent
    <script src="/js/vista_show.js"></script>

@endsection
