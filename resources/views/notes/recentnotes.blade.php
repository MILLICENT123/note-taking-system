@extends('layout.master')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Recent Notes</h1>
    
    <div class="row">
        @forelse($recentNotes as $note)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $note->title }}</h5>
                        <p class="card-text">{{ Str::limit($note->content, 100) }}</p>
                        <a href="{{ route('notes.show', $note->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No recent notes available.</p>
        @endforelse
    </div>
</div>
@endsection

