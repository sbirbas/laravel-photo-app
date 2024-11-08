@extends('layouts.navigation')
@section('content')
                <h2 class="card-title">Welcome, {{ Auth::user()->name }}</h2>
                <p class="card-text">Email: {{ Auth::user()->email }}</p>

                <div class="d-flex justify-content-between mt-4">
                    <a class="btn btn-primary" href="{{ route('profile.edit') }}">Edit Profile</a>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button class="btn btn-danger" type="submit">Log Out</button>
                    </form>
                </div>

                <hr class="my-4">

                <h5 class="mt-4">Upload Photos</h5>
                @include('photos.create')

@endsection
