@extends('layouts.app')
@section('content')
    <div class="cards">
        @foreach($photos as $photo)
            <div>
                <img id="gallery-cards" class="mx-5" src="{{ asset('storage/' . $photo->url) }}" alt="Photo" />
            </div>
        @endforeach
    </div>


    </div>

{{--    @auth--}}
{{--            <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display:inline;">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit" class="btn btn-danger">Delete Image?</button>--}}
{{--            </form>--}}
{{--            @endauth--}}

            </div>
            @endsection
