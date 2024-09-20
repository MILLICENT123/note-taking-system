@extends('layout.master')

@section('content')
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="note_id" value="{{ $note->id }}">
        <textarea name="content" required></textarea>
        <button type="submit">Add Comment</button>
    </form>

    @foreach($note->comments as $comment)
        <div>
            <p>{{ $comment->content }}</p>
            <small>Posted at {{ $comment->created_at }}</small>

            <a href="{{ route('comments.edit', $comment->id) }}">Edit</a>
            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
