@extends('layout.master')

@section('title', 'User Details')

@section('content')
<div class="container mt-5">
    <h2>User Details</h2>
    <div class="card">
        <div class="card-header">
            User Information
        </div>
        <div class="card-body">
            <p><strong>First Name:</strong> {{ $user->firstname }}</p>
            <p><strong>Last Name:</strong> {{ $user->lastname }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
            <a href="{{ route('users.index') }}" class="btn btn-primary">Back to User List</a>
        </div>
    </div>
</div>
@endsection

