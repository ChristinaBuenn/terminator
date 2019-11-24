@extends('layout')

@section('content')

    <div class="container">
        <form action="/vistas/{{$vista->hash}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="title" class="col-sm-1-12 col-form-label">Titel</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Dein Titel" value="{{$vista->title}}">
                </div>
            </div>
            <div class="form-group">
                <label for="body">Description</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{$vista->body}}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date"
                       class="form-control" name="date" id="date" aria-describedby="helpDate" placeholder="" value="{{$vista->date}}">
                <small id="helpDate" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
    </div>

@endsection
