<!DOCTYPE html>

<html>

<head>
    <title></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>

</head>


<body>

    <div class="container">
        @yield('content')
    </div>


    <br/><br/>

    <hr>

    <ul>
        <li>
            <a href="/projects/">Projects</a>
        </li>        
        <li>
            <a href="/">Go Home!</a>
        </li>
    </ul>

</body>

</html>