@extends('layout.master')  <!-- Ensure you are extending the layout -->


@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-3 col-lg-4">
            <!-- Card Container -->
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Sign Up</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Sign Up</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('login') }}" class="text-decoration-none">Already have an account? Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
