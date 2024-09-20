@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h2>Edit Comment</h2>
    <form action="{{ route('comments.update', $comment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="3" required>{{ old('content', $comment->content) }}</textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning mt-3">Update</button>
    </form>
</div>
@endsection
