@extends('layout.master')

@section('title', 'Create Note')

@section('content')
<div class="container mt-5">
    <h2>Create a New Note 📝📔</h2>
    <form method="POST" action="{{ route('notes.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category" class="form-control">
          <option value="personal">Personal</option>
          <option value="work">Work</option>
          <option value="study">Study</option>
        </select>
</div>
        <button type="submit" class="btn btn-primary">Add New Note 📝📔</button>
    </form>
</div>
@endsection
