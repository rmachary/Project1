@extends('components.layout')

@section('content')

    <div class="note-container single-note">
        <div class ="note-header">
            <h3>{{$note->creeated_at}}</h3>
            <div class="note-buttons">
                <a href="{{route('note.edit', $note->id)}}" class ="note-edit-button">Edit </a>
                <botton class="note-delete-button">Delete </a>
            </div>
            <button class="note-delete-button">Delete</button>
        </div>
        <div class="note-body">
            <p>{{$note->note}}</p>
        </div>
    </div>
    
                



@endsection
