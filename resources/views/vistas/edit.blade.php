@extends('layout')

@section('content')

    <div class="container">
        <form action="/vistas/{{$vista->hash}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="col-sm-1-12 col-form-label">Name of your event</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="title" id="title" value="{{$vista->title}}">
                </div>
            </div>
            <div class="form-group">
                <label for="body">Description of your event</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{$vista->body}}</textarea>
            </div>
            <div class="form-group">
                <label for="date">When is your event?</label>
                <input type="date"
                       class="form-control" name="date" id="date" aria-describedby="helpDate" value="{{$vista->date}}">
            </div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Save changes</button>
                </div>
            </div>
        </form>
    </div>

@endsection
