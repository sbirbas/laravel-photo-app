@extends('layouts.app')
@section('content')

    <div class="row" style="justify-content: center !important">
    <div id="create-card"  class="mt-5 h-100 w-75 align-content-center card p-5">
    <h1 class="text-center">Upload New Photo <i class="fa-solid fa-camera-retro"></i></h1>

    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input class="col-12 m-1 post-photo " type="file" name="image" multiple required>
        <textarea id="photo-description" class="col-12 m-1" name="description" placeholder="Description" required></textarea>
        <button class="col-12 m-1" type="submit">Upload Image</button>
    </form>
    </div>
    </div>
@endsection
