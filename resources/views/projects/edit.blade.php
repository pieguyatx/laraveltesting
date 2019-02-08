@extends('projects\layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">

        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Title" value="{{ $project->title }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" placeholder="" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" style="min-width:50%;height:4em" required>{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">
                    Update Project
               </button>
            </div>
        </div>

        @include( 'errors' )

    </form>

    <br/><br/>

    <form method="POST" action="/projects/{{ $project->id }}">

        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link" style="color:red">
                    Delete Project
                </button>
            </div>
        </div>

    </form>

@endsection