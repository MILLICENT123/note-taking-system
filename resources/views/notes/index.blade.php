@extends('layout.master')

@section('title', 'All Notes')

@section('content')
<div class="container mt-5">
    <h2>All Notes</h2>

    <a href="{{ route('notes.create') }}" class="btn btn-success mb-3">Add New Note</a>

    <form action="{{ route('notes.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search notes..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <!-- Filter buttons -->
    <div class="mb-3">
        <a href="{{ route('notes.index') }}" class="btn btn-outline-success">All</a>
        <a href="{{ route('notes.personal') }}" class="btn btn-outline-primary">Personal</a>
        <a href="{{ route('notes.work') }}" class="btn btn-outline-info">Work</a>
        <a href="{{ route('notes.study') }}" class="btn btn-outline-secondary">Study</a>
    </div>

    @if($notes->isEmpty())
        <p>No notes found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->id }}</td>
                        <td>{{ $note->title }}</td>
                        <td>{{ Str::limit($note->content, 100) }}</td>
                        <td>{{ ucfirst($note->category) }}</td>
                        <td>
                            <a href="{{ route('notes.show', $note->id) }}" class="btn btn-outline-primary btn-sm">View</a>
                            <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation">
          <ul class="pagination">
              {{ $notes->links('pagination::bootstrap-4') }}
          </ul>
        </nav> 
    @endif
</div>
@endsection
