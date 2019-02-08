@extends('projects\layout')

@section('content')
    <h1 class="title">
        Projects: A Laravel tutorial test page
    </h1>
    <p>
        Project info from the database is listed below.
    </p>

    <h2 class="title">Episode Titles:</h2>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </li>
        @endforeach
    </ul>

    {{-- Conditionally show this if user is authorized according to ProjectPolicy --}}
    @can('update', $project) 
        <br/><br/>
        <pre>
            Yes, we can [change things here because you're authorized]!
        </pre>
    @endcan

@endsection