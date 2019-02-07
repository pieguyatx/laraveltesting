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
            <ul>
            @foreach ($project->tasks as $task)
                <li>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf

                        <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>

                    </form>
                </li>
            @endforeach
            </ul>
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