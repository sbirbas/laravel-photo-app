@extends('layouts.navigation')
@section('content')
                <h2 class="card-title">Welcome, {{ Auth::user()->name }}</h2>
                <p class="card-text">Email: {{ Auth::user()->email }}</p>

                <div class="d-flex justify-content-between mt-4">
                    <button href="{{ route('profile.edit') }}">Edit Profile</button>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                </div>

                <hr class="my-4">

                <h5 class="mt-4 text-center">Upload Photos</h5>
                <div class="row" style="justify-content: center !important">
                    <div id="create-card"  class="mt-5 h-100 w-75 align-content-center card p-5">
                        <h1 class="text-center">Upload New Photo <i class="fa-solid fa-camera-retro"></i></h1>

                        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
e
                            <input class="col-12 m-1 post-photo" type="file" name="image" multiple required>
                            <select id="photo-description" class="col-12 m-1" name="description" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="astro">Astro</option>
                                <option value="nature">Nature</option>
                                <option value="water">Water</option>
                                <option value="other">Other</option>
                            </select>
                            <button class="col-12 m-1" type="submit">Upload Image</button>
                        </form>
                    </div>
                </div>

@endsection
