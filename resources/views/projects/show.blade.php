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
        <div class="tasks box">
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

    {{-- Add new tasks --}}
    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf

        <div class="field">
            <label class="label" for="description">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>   
    </form>

    @include('errors')

    <hr>

    <div class="controls">
            <a href="/projects/{{ $project->id }}/edit">

        <button>
                Edit this project
        </button>
    </a>

    </div>
@endsection