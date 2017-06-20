@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create Post</h1>
        <hr>
        
        @include('layouts.errors')

        <form method="POST" action="/posts">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Body</label>
                <input type="text" class="form-control" name="body">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Publish</button>
            </div>
        </form>
    </div>
@endsection