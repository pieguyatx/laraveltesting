<!DOCTYPE html>

<html>

<head>
    <title></title>
</head>


<body>

    <h1>
        Projects: A Laravel tutorial test page
    </h1>
    <p>
        Project info from the database is listed below.
    </p>

    <h2>Episode Titles:</h2>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </li>
        @endforeach
    </ul>

</body>

</html>