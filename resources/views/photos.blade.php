@extends('layouts.app')
@section('content')
    @foreach($photos as $photo)
        <img class="col-3 w-25" src="{{ asset('storage/' . $photo->url) }}" alt="Photo" />
        @auth
            <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Image?</button>
            </form>
            @endauth
            @endforeach

    </div>


@endsection
