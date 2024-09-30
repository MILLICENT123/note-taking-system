@extends('layout.master')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <div class="jumbotron jumbotron-fluid text-center bg-primary text-white" style="padding: 5rem 2rem;">
        <div class="container">
            <h1 class="display-4">Welcome to Millie's Note App</h1>
            <p class="lead">Experience luxury in productivity. Let’s craft something extraordinary today.</p>
            <a href="{{ route('register') }}" class="btn btn-lg btn-light">Get Started</a>
            <a href="{{ route('login') }}" class="btn btn-lg btn-outline-light">Login</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container text-center my-5">
        <h2 class="mb-5">Key Features</h2>
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-lock fa-3x mb-3 text-primary"></i>
                <h4>Your Notes Vault</h4>
                <p>All your thoughts secured elegantly in one place, easily accessible and safe.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-award fa-3x mb-3 text-primary"></i>
                <h4>Recent Triumphs</h4>
                <p>Celebrate your recent creations and successes in a unique and stylish way.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-lightbulb fa-3x mb-3 text-primary"></i>
                <h4>Exclusive Tips</h4>
                <p>Get premium advice tailored just for you to enhance your productivity and creativity.</p>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Start Crafting Your Masterpiece Today!</h2>
            <p class="mb-5">Unleash your productivity with the elegance of simplicity. Your best ideas deserve a premium touch.</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Join Now</a>
        </div>
    </div>

    <!-- Luxurious Categories Section -->
    <div class="lux-categories text-center my-5">
        <h2 class="mb-4" style="font-weight: bold; color: #333;">Dive Into Your Interests</h2>
        <div class="d-flex justify-content-center">
            <button class="btn btn-outline-dark mx-2 btn-lg shadow-sm" style="border-radius: 30px;">Personal</button>
            <button class="btn btn-outline-dark mx-2 btn-lg shadow-sm" style="border-radius: 30px;">Work</button>
            <button class="btn btn-outline-dark mx-2 btn-lg shadow-sm" style="border-radius: 30px;">Study</button>
        </div>
    </div>

    <!-- Featured Inspiration Section -->
    <div class="inspiration-section my-5 text-center">
        <div class="card mx-auto shadow-lg border-0" style="max-width: 700px; background: #000; color: #fff;">
            <div class="card-body p-5">
                <h5 class="card-title">“Luxury is in each detail.”</h5>
                <p class="card-text">Unleash your productivity with the elegance of simplicity. Your best ideas deserve a premium touch.</p>
                <button class="btn btn-outline-light mt-3">Read More Inspiration</button>
            </div>
        </div>
    </div>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-4">
    <div class="container">
       
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="https://www.facebook.com" target="_blank" class="text-white">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.twitter.com" target="_blank" class="text-white">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com" target="_blank" class="text-white">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </li>
        </ul>
    </div>
</footer>

@endsection
