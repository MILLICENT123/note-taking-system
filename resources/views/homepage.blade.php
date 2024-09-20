@extends('layout.master')

@section('content')
<div class="container my-5">

    <div class="dashboard-header d-flex align-items-center justify-content-between bg-light p-4 rounded shadow-sm">
        <div>
            <h1 class="display-5 font-weight-bold">Hello, {{ optional(Auth::user())->firstname }}!</h1>
            <p class="lead">Let's organize your notes effectively today.</p>
        </div>
        <div>
            <a href="{{ route('notes.create') }}" class="btn btn-primary btn-lg">+ Add a New Note</a>
        </div>
    </div>

   
    <div class="row text-center my-5">
        <div class="col-md-3 mb-3">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Notes</h5>
                    <p class="display-4">45</p>
                    <a href="{{ route('notes.index') }}" class="btn btn-outline-primary">View All Notes</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Recent Activity</h5>
                    <p class="lead">You’ve added 3 new notes this week.</p>
                    <a href="{{ route('notes.recentnotes') }}" class="btn btn-outline-success">View Recent Notes</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-info shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Personalized Tips</h5>
                    <p class="lead">Stay organized with our daily tips!</p>
                    <a href="#" class="btn btn-outline-info">View Tips</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-secondary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Comments</h5>
                    <p class="lead">Manage your comments efficiently.</p>
                    <a href="{{ route('comments.index') }}" class="btn btn-outline-secondary">View Comments</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-5">
        <h2 class="mb-4">Explore Categories</h2>
        <div class="d-flex justify-content-center">
            <a href="{{ route('notes.personal') }}" class="btn btn-outline-primary mx-2 btn-lg">Personal</a>
            <a href="{{ route('notes.work') }}" class="btn btn-outline-secondary mx-2 btn-lg">Work</a>
            <a href="{{ route('notes.study') }}" class="btn btn-outline-success mx-2 btn-lg">Study</a>
        </div>
    </div>

   
    <div class="my-5">
        <h2 class="text-center mb-4">This Week's Featured Note</h2>
        <div class="card mx-auto shadow-sm" style="max-width: 700px;">
            <div class="card-body text-center">
                <h5 class="card-title">Boost Your Productivity with These Tips</h5>
                <p class="card-text">Discover powerful strategies to stay focused and improve your workflow.</p>
                <a href="#" class="btn btn-info">Read More</a>
            </div>
        </div>
    </div>

</div>
@endsection
