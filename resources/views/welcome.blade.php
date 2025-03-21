@extends('layouts.app')
@section('content')
    <div class="hero-content">
        <h1 class="mt-5">SOPHIA BIRBAS</h1>
            <div id="hero">
                <img id="hero-img" class="pt-1 img fluid" src="{{ asset('media/hero-img.JPG') }}" alt="Leaves"/>
                <img id="hero-bird" class="d-sm-none d-xs-block pt-1 img fluid" src="{{ asset('media/bird.jpeg') }}" alt="Leaves"/>
            </div>
    </div>
@endsection
