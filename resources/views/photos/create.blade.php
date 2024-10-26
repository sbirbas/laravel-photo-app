@extends('layouts.app')

@section('content')

    <div class="row" style="justify-content: center !important">
    <div id="create-card"  class="mt-5 h-100 w-50 align-content-center card p-5">
    <h1>Upload New Photo</h1>

    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input class="col-12 m-1 " type="file" name="image" required>
        <textarea class="col-12 m-1" name="description" placeholder="Description" required></textarea>
        <button class="col-12 m-1 btn btn-outline-primary" type="submit">Upload Image</button>
    </form>
    </div>
    </div>
@endsection
