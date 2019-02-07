@extends('projects\layout')

@section('content')
    <h1 class="title">Project Title: {{ $project->title }}</h1>

    <h2 class="description">Project Description:</h2>

    <div>
        <p>
            {{ $project->description }}
        </p>
    </div>

    @if ($project->tasks->count())
        <div class="tasks">
            <h2>Tasks:</h2>
            @foreach ($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </div>
    @endif

    <hr>

    <div class="controls">
            <a href="/projects/{{ $project->id }}/edit">

        <button>
                Edit this project
        </button>
    </a>

    </div>
@endsection