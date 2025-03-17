@extends('layouts.app')

@section('content')
    <div id ="photo-container" class="container mt-4">
        <h1>Gallery</h1>
        <div class="grid">
            @foreach($photos as $photo)
                <div class="image-container">
                    <img class="grid-item" src="{{ Storage::disk('s3')->url($photo->url) }}" alt="Photo">
                </div>
            @endforeach
{{--                @auth--}}
{{--                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display: inline;">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button id="delete-button" type="submit" class="btn btn-danger btn-sm mt-2">--}}
{{--                            <i class="fa-solid fa-trash"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                @endauth--}}
        </div>
    </div>
@endsection
