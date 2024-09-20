@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Comments</h2>
    <a href="{{ route('comments.create') }}" class="btn btn-primary mb-3">Add Comment</a>

    @foreach ($comments as $comment)
        <div class="border p-3 mb-3 rounded shadow-sm">
            <p class="text-break">{{ $comment->content }}</p> <!-- Bootstrap's text-break handles word wrapping -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
