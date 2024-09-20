@extends('layout.master')


@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-3 col-lg-4">
            <!-- Card Container -->
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Login</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success mb-3">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger mb-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('register') }}" class="text-decoration-none">Don't have an account? Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
