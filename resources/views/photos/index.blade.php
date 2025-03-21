@extends('layouts.app')

@section('content')
    <div id ="photo-container" class="container mt-4">
        <h1>Gallery</h1>
        <div class="grid">
            @foreach($photos as $photo)
                <div class="image-container">
                    <img class="grid-item" src="{{ asset('storage/' . $photo->url) }}" alt="Photo">
                </div>
            @endforeach
        </div>
    </div>
@endsection
