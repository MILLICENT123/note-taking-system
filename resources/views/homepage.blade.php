@extends('layout.master')


@section('content')
<div class="container my-5">
    <!-- Page Header -->
    <div class="hero-section position-relative text-white text-center py-5 rounded" style="background-image: url('/path/to/background-image.jpg'); background-size: cover; background-position: center; border-radius: 15px;">
        <!-- Gradient Overlay -->
        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: pink; border-radius: 15px;"></div>
        <div class="hero-content position-relative z-index-2">
            <h1 class="display-4 font-weight-bold">Welcome to Millie's Note Taking App</h1>
            <p class="lead mb-4">Organize your thoughts, tasks, and study materials all in one place.</p>
            <a href="{{ route('notes.create') }}" class="btn btn-success btn-lg">Add a New Note</a>
        </div>
    </div>
</div>

    <!-- Notes Categories Buttons -->
    <div class="text-center mb-5">
        <h2 class="mb-4">Categories</h2>
        <div class="d-flex justify-content-center">
            <a href="{{ route('notes.personal') }}" class="btn btn-outline-primary mx-2 btn-lg">Personal Notes</a>
            <a href="{{ route('notes.work') }}" class="btn btn-outline-secondary mx-2 btn-lg">Work Notes</a>
            <a href="{{ route('notes.study') }}" class="btn btn-outline-success mx-2 btn-lg">Study Notes</a>
        </div>
    </div>

    <!-- Notes Sections -->
    <div class="row">
        <!-- Personal Notes Section -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Personal Notes</h5>
                    <p class="card-text">Keep track of your personal thoughts and ideas here.</p>
                    <!-- List of Notes -->
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Personal Note 1</li>
                        <li class="list-group-item">Personal Note 2</li>
                        <li class="list-group-item">Personal Note 3</li>
                    </ul>
                    <a href="{{ route('notes.personal') }}" class="btn btn-primary btn-block">View All Personal Notes</a>
                </div>
            </div>
        </div>

        <!-- Work Notes Section -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Work Notes</h5>
                    <p class="card-text">Manage your work-related notes and tasks efficiently.</p>
                    <!-- List of Notes -->
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Work Note 1</li>
                        <li class="list-group-item">Work Note 2</li>
                        <li class="list-group-item">Work Note 3</li>
                    </ul>
                    <a href="{{ route('notes.work') }}" class="btn btn-primary btn-block">View All Work Notes</a>
                </div>
            </div>
        </div>

        <!-- Study Notes Section -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Study Notes</h5>
                    <p class="card-text">Organize your study materials and exam preparation notes.</p>
                    <!-- List of Notes -->
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Study Note 1</li>
                        <li class="list-group-item">Study Note 2</li>
                        <li class="list-group-item">Study Note 3</li>
                    </ul>
                    <a href="{{ route('notes.study') }}" class="btn btn-primary btn-block">View All Study Notes</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Note Section -->
    <div class="my-5">
        <h2 class="text-center mb-4">Featured Note of the Week</h2>
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h5 class="card-title">How to Stay Organized</h5>
                <p class="card-text">Discover some great tips and tricks on how to stay organized in your personal and professional life.</p>
                <a href="#" class="btn btn-info">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection
