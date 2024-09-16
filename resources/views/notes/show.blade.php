@extends('layout.master')

@section('title', $note->title)

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">{{ $note->title }}</h2>

    <table class="table table-bordered table-striped">
        <tbody>
            <tr class="mb-3">
                <th scope="row" class="w-25">Title</th>
                <td>{{ $note->title }}</td>
            </tr>
            <tr class="mb-3">
                <th scope="row">Content</th>
                <td>
                    <!-- Using Bootstrap utility classes for text wrapping and overflow -->
                    <div class="text-wrap text-break">
                        <p class="mb-0">{{ $note->content }}</p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="d-flex mt-4">
        <a href="{{ route('notes.index') }}" class="btn btn-success me-2">Back to Notes</a>
        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning me-2">Edit</a>
        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
        </form>
    </div>
</div>
@endsection
