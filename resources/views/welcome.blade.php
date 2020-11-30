<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Movie Database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Welcome to Angular Movie Database</h1>
    <p>This is the Documentation page for Angular Movie Database</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">AMDB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/team">Team</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <h2>Documentation</h2>
            <h5><u>About</u></h5></h5>
            <p>The Angular Movie Database API is a RESTful web service to obtain movie information, all content and images on the API are copywrited to its respective producers.</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <br>

            <h5><u>How to use?</u></h5></h5>
            <p>The API has 2 different end points which can be accessed using an API key which is set as default.</p>

            <h5><u>API KEY</u></h5></h5>
            <p>The default API Key is set as <b>q1w2e3r4t5</b></p>
            <p>It has to be passed as a header called: <b>API-KEY</b> to access the API</p>

            <h5><u>End Points</u></h5></h5>
            <p>For receiving all movies available in the database:</p>
            <p class="text-primary"><b><i>http://127.0.0.1:8000/api/movies</i></b></p>

            <p>For receiving a specific movie available in the database:</p>
            <p class="text-primary"><b><i>http://127.0.0.1:8000/api/movies/{id}</i></b></p>

            <p>For adding a movie, send POST request to:</p>
            <p class="text-primary"><b><i>http://127.0.0.1:8000/api/movies</i></b></p>

            <p>For adding a deleting, send DELETE request to:</p>
            <p class="text-primary"><b><i>http://127.0.0.1:8000/api/movies/{id}</i></b></p>

            <p>For adding a editing a movie, send PUT request to:</p>
            <p class="text-primary"><b><i>http://127.0.0.1:8000/api/movies/{id}</i></b></p>


        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Angular Movie Database 2020</p>
</div>

</body>
</html>
