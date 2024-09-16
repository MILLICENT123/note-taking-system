<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $note->title ?? '') }}" required>
</div>

<div class="form-group mt-3">
    <label for="content">Content</label>
    <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content', $note->content ?? '') }}</textarea>
</div>
<form action="{{ route('notes.store') }}" method="POST">
    @csrf
    @method('POST') 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
