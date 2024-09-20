<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | Millie's Note App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(to right, #ff6f61, #de64a1);
            color: #fff;
            padding: 100px 0;
            position: relative;
        }
        .hero-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }
        .hero-section .content {
            position: relative;
            z-index: 1;
        }
        .btn-custom {
            background-color: #ff6f61;
            color: #fff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #de64a1;
            color: #fff;
        }
        .footer-custom {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="overlay"></div>
        <div class="container content">
            @if(Auth::check())
                <h1 class="display-4">Welcome, {{ Auth::user()->firstname }}!</h1>
            @else
                <h1 class="display-4">Welcome, Guest!</h1>
            @endif
            <p class="lead">Take control of your ideas and tasks—manage your notes effortlessly and stay on top of your day!</p>
            <a href="{{ route('homepage') }}" class="btn btn-custom btn-lg mt-3">Explore Your Dashboard</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Millie’s Note App. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
