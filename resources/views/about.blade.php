@extends('layouts.app')
@section('content')

    <div id="about-container" class="container mt-5">
        <div class="row mx-5">
            <h1 class="col-12 text-center mb-4">About Me</h1>
            <div class="col-md-6 col-12 mb-4">
                <p>Hey! I'm Sophia. I find so many things in life beautiful. Whether it's a cute squirrel, a random moment, or something as amazing as the Orion Nebula.</p>
                <p>Photography is my way of freezing those special moments we usually miss. I hope my photos give you a glimpse of what I find beautiful.</p>
                <p>Hope you enjoy checking out my work! Feel free to reach out with any thoughts or feedback. Thanks for the support! *p.s: I am also a web developer, hope you like this site I made :)* </p>
            </div>

            <div class="col-md-6 col-12">
                <img id="about-page-image" class="img-fluid" src="{{ asset('media/me.JPG') }}" alt="About Me"/>
            </div>
        </div>
    </div>

@endsection
