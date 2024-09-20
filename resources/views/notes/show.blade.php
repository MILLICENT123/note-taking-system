@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h2>View {{ $note->title }}</h2>

    <table class="table table-bordered">
        <tr><th>Title</th><td>{{ $note->title }}</td></tr>
        <tr><th>Content</th><td>{{ $note->content }}</td></tr>
    </table>

    <div class="d-flex mt-3">
        <a href="{{ route('notes.index') }}" class="btn btn-success me-2">Back</a>
        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning me-2">Edit</a>
        <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>

</div>
@endsection
