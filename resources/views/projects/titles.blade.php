@extends('layout')

@section('title','Projects: Titles')

@section('content')
    <h1>
        Projects, by Title
    </h1>
    <p>
        Projects from the database are listed below.
    </p>

    <h2>Titles:</h2>
    <ul>
        @foreach($titles as $title)
            <li>{{$title}}</li>
        @endforeach
    </ul>
    <hr>

    <h2>IDs:</h2>
    <ul>
        @foreach($projects as $project)
            <li>{{$project->id}}</li>
        @endforeach
    </ul>
    <hr>

@endsection