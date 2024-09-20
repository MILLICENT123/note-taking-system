@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h2>Add New Comment</h2>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="3" required>{{ old('content') }}</textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
