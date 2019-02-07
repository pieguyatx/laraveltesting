<!DOCTYPE html>

<html>

<head>
    <title></title>
</head>


<body>

    <h1>
        Create a New Project
    </h1>
    <p>
        Demo of how to input data into a database using Laravel
    </p>

    <form method="POST" action="/projects">

        {{-- Security feature using middleware 'VerifyCsrfToken' --}}
        @csrf

        <div class="control">
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Project title" required>
        </div>

        <div class="field">
            <textarea class="control  {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project description" required></textarea>
        </div>
 
        <div>
            <button type="submit">
                Create Project
            </button>
        </div>

        @if ($errors->any())
            <div class="notification is-danger" style="color:red;margin:15px">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif

    </form>

    <hr>

    <div>
        <ul>
            <li>See the <a href="/projects">full list of projects</a>.</li>
            <li>Go back <a href="/">home</a>.</li>
        </ul>
    </div>

</body>

</html>