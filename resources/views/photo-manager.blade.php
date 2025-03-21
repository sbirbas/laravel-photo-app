@extends('layouts.navigation')
@section('content')
    <h1 class="text-center">Manage Photos</h1>
    @foreach ($photos as $photo)
        <img class="col-1" src="{{ Storage::disk('s3')->url($photo->url) }}" alt="Photo">
            <form action="{{ route('photos.destroy', $photo) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button id="delete-button" type="submit" class="btn btn-danger btn-sm mt-2">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
    @endforeach
@endsection
