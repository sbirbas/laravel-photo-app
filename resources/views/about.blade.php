@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <h1 class="col-12">About Me</h1>
        <p class="col-5">I love photography; capturing moments in life with a photo is incredible.</p>
        <div class="col-5">
            <img id="about-page-image" class="img-fluid" src="{{asset('storage/sofeeyah.png')}}" alt="About Me"/>
        </div>
    </div>
</div>


@endsection


