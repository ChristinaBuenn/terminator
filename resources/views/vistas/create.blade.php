@extends('layout')

@section('content')

    <div class="container">
        <form action="/vistas" method="post">
            @csrf
            <div class="form-group">
                <label for="title" class="col-sm-1-12 col-form-label">Name of your event</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="title" id="title">
                </div>
            </div>
            <div class="form-group">
                <label for="body">Description of your event</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="date">When is your event?</label>
                <input type="date"
                       class="form-control" name="date" id="date" aria-describedby="helpDate">
            </div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection
