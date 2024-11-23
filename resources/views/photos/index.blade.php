@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Gallery</h1>

        <div id="gallery-cards" class="mb-5">
            @foreach($photos as $photo)
                        <img style="height:400px; width:400px;" id ='gallery-card' src="{{ asset('storage/' . $photo->url) }}" alt="Photo" />
                        @auth
                            <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button id="delete-button" type="submit" class="btn btn-danger btn-sm mt-2">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        @endauth
            @endforeach
        </div>
    </div>
@endsection
