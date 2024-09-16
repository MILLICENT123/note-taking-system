@extends('layout.master')

@section('title', 'All Notes')

@section('content')
<div class="container mt-5">
    <h2>All Notes</h2>


    {{-- Create new note button --}}
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('notes.create') }}" class="btn btn-primary">Create New Note</a>

        <!-- Filter Buttons -->
        <div class="btn-group" role="group" aria-label="Filter Notes">
            <a href="{{ route('notes.index') }}" class="btn btn-secondary me-2">All</a>
            <a href="{{ route('notes.category', ['category' => 'personal']) }}" class="btn btn-primary me-2">Personal</a>
            <a href="{{ route('notes.category', ['category' => 'work']) }}" class="btn btn-success me-2">Work</a>
            <a href="{{ route('notes.category', ['category' => 'study']) }}" class="btn btn-info">Study</a>
        </div>
    </div>

    {{-- Notes Table --}}
    @if($notes->isEmpty())
        <p>No notes available.</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notes as $note)
                        <tr>
                            <td>{{ $note->title }}</td>
                            <td style="max-width: 300px; word-wrap: break-word; white-space: normal;">
                                 {{ $note->content }}
                            </td>
                            <td>{{ ucfirst($note->category) }}</td>
                            <td>
                                <a href="{{ route('notes.show', $note->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
