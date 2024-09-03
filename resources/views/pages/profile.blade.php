<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Demo</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <h1 class="text-center">Profile</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


                <h1 class="text-center">Welcome to My Website</h1>
                <p class="text-center">This is a simple example using Bootstrap. Bootstrap helps in creating responsive layouts with ease.</p>

    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
