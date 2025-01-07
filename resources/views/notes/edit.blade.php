@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>{{ isset($note) ? 'Edit Note' : 'Add Note' }}</h1>
    <form action="{{ isset($note) ? route('notes.update', $note) : route('notes.store') }}" method="POST">
        @csrf
        @if (isset($note))
        @method('PUT')
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $note->title ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $note->content ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
