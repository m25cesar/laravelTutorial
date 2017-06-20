@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create Post</h1>
        <hr>
        
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

            <button type="submit" class="btn btn-default">Publish</button>
        </form>
    </div>
@endsection