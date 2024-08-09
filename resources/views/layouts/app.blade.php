<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
    <!-- Add links to your stylesheets, scripts, etc. here -->
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Reda Yahya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('flights.index') }}">Liste des vols</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('flights.create') }}">Créer un vol</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tickets.index') }}">Liste des billets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tickets.create') }}">Créer un billet</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container flex-grow-1">
        @yield('content')
    </div>

    <!-- Include Bootstrap JS and Popper.js (required for some Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Footer Section -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <p class="text-white">@2024 Mon Application. All Rights Reserved.</p>
            <p class="text-white">Made with ❤️ by Reda Yahya</p>
            <p class="text-white">Contact us at <a href="mailto:redayahyapro@gmail.com" class="text-white">redayahyapro@gmail.com</a></p>
        </div>
    </footer>
</body>
</html>


<!-- Mon Application Mon Application Your Company info@yourcompany.com info@yourcompany.com -->