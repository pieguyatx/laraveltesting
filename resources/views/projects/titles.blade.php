@extends('layout')

@section('title','Projects: Titles')

@section('content')
    <h1>
        Projects, by Title
    </h1>
    <p>
        Projects from the database are listed below.
    </p>

    <ul>
        @foreach($titles as $title)
            <li>{{$title}}</li>
        @endforeach
    </ul>
    <hr>

@endsection