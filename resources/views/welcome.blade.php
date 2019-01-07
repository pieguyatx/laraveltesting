@extends('layout')

@section('title','Home: Laravel Testing')

@section('content')
    <h1>
        My {{$arbitrary}} website in the "welcome" module...
    </h1>
    <p>
        This stuff is special content just for the Welcome page!  Check it out. Just the content from the very first page.
    </p>

    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>

@endsection