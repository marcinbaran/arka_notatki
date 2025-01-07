@extends('layout')

@section('content')
    <div class="container mt-4">
        <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Add Note</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @foreach ($notes as $note)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $note->title }}</h5>
                            <p class="card-text">{{ $note->content }}</p>
                            <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
