<h1>
    Projects: A Laravel tutorial test page
</h1>
<p>
    Project info from the database is listed below.
</p>

<h2>Episode Titles:</h2>
<ul>
    @foreach($projects as $project)
        <li>{{$project->title}}</li>
    @endforeach
</ul>

