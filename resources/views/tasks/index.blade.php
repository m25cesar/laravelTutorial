@extends('layouts.master')

@section('content')
    <ul>
        @foreach($tasks as $task)
            <li><a href="{{ route('tasks.show',$task->id) }}">{{ $task->body }}</a></li>
        @endforeach
    </ul>
@endsection