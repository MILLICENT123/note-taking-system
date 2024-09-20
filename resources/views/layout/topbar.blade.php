{{-- start nav --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-primary" href="#">Millie's Note App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto align-items-center">
                @auth
                    <a class="nav-link text-dark me-4" href="{{ route('homepage') }}">Dashboard</a>
                    <a class="nav-link text-dark me-4" href="{{ route('notes.index') }}">My Notes</a>
                    <a class="nav-link text-dark me-4" href="{{ route('users.index') }}">Users</a>
                    <a href="{{ route('comments.index') }}" class="btn btn-primary">View Comments</a>

                    
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                      @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                    </form>

                @endauth
                
                @guest
                    <a class="nav-link text-dark me-4" href="{{ route('login') }}">Login</a>
                    <a class="nav-link text-dark me-4" href="{{ route('register') }}">Register</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
{{-- end nav --}}
