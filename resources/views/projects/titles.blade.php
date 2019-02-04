@extends('layout')

@section('title','Episodes: Titles and more...')

@section('content')
    <h1>
        Episodes, by Title
    </h1>
    <p>
        Episodes from the database are listed below.
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
        @foreach($episodes as $episode)
            <li>{{$episode->episode_id}}</li>
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