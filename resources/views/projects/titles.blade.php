@extends('layout')

@section('title','Projects: Titles and more...')

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

    <h2>Episode IDs:</h2>
    <ul>
        @foreach($projects as $project)
            <li>{{$project->episode_id}}</li>
        @endforeach
    </ul>

    <h2>Guests:</h2>
    <ul>
        @foreach($guests as $guest)
            <li>{{$guest->firstname}}</li>
        @endforeach
    </ul>


    <hr>

@endsection