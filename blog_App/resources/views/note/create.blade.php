@extends('components.layout')

@section('content')

    <div class ="note-container single-note">
        <h1>Create a new note</h1>
        <form action="{{ route('notes.store') }}" class="note-formethod="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <textarea name="note" id="note" class="form-control" rows="1">Enter your note here</textarea>
            </div>
            <div class="note-buttons">
                <a href="{{ route('notes.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
            <div class="form-group">
                <label for="content">Content</label>


@endsection