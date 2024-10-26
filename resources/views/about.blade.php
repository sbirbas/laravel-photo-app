@extends('layouts.app')
@section('content')

    <div id="about-container" class="container mt-5 pl-5">
        <div class="row mx-5">
            <h1 class="col-12 text-center mb-4">About Me</h1>
            <div class="col-md-6 col-12 mb-4">
                <p>Hey there, I'm Sophia, an amateur photographer who loves to capture the beauty of the world. Whether it's the vibrant colors of the foliage, a cute squirrel I found on a hike, or the mundane moments of everyday life, I hope to capture it through the lens.</p>
                <p>Photography, for me, is more than just a hobby—it's a way to express creativity and connect with others. I love exploring different styles and techniques, from portrait photography to landscape shots, always aiming to improve and evolve my skills.</p>
                <p>I hope you enjoy the photos featured here; please reach out with your feedback!</p>
            </div>
            <div class="col-md-6 col-12">
                <img id="about-page-image" class="img-fluid" src="{{ asset('storage/sofeeyah.png') }}" alt="About Me"/>
            </div>
        </div>
    </div>

@endsection
