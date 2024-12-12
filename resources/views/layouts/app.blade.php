<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
    <!-- Mise à jour vers Bootstrap 5.3 pour un design plus moderne -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar avec style amélioré -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Flight Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('flights.index') }}">Flight List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('flights.create') }}">Create Flight</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('tickets.index') }}">Ticket List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('tickets.create') }}">Create Ticket</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container principal avec padding -->
    <div class="container flex-grow-1 py-4">
        @yield('content')
    </div>

    <!-- Footer amélioré -->
    <footer class="footer mt-auto py-4 bg-dark">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h6 class="text-white mb-3">&copy; 2024 Flight Management</h6>
                    <p class="text-white-50 mb-2">Made with <span class="text-danger">❤️</span> by Reda Yahya</p>
                    <p class="text-white-50">Contact: <a href="mailto:reda.yahya@e-polytechnique.ma" class="text-white text-decoration-none" id="mail">reda.yahya@e-polytechnique.ma</a></p>
                </div>
                <div>
                    <a href="https://www.linkedin.com/in/reda-yahya-920976253/" target="_blank" class="text-white me-3">
                        <i class="fab fa-linkedin fa-2x" id="linkedin"></i>
                    </a>
                    <a href="https://github.com/Reda-Yh" target="_blank" class="text-white me-3 github-icon">
                        <i class="fab fa-github fa-2x" id="github"></i>
                    </a>
                    <a href="https://discord.gg/tckCRRqUaa" target="_blank" class="text-white discord-icon">
                        <i class="fab fa-discord fa-2x" id="discord"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <style>
        #linkedin {
            color: #0A66C2;;
        }

        #github {
            color: #6e5494;
        }

        #discord {
            color: #7289da;
        }

        #linkedin:hover,#github:hover,#discord:hover{
            color: white;
        }
    </style>


    <!-- Mise à jour des scripts vers Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!-- Mon Application Mon Application Your Company info@yourcompany.com info@yourcompany.com -->
