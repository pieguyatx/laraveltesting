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

        <div>
            <input type="text" name="title" placeholder="Project title" required>
        </div>

        <div>
            <textarea name="description" placeholder="Project description" required></textarea>
        </div>
 
        <div>
            <button type="submit">
                Create Project
            </button>
        </div>

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