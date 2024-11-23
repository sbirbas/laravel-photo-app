@extends('layouts.app')
@section('content')
<div id="hero">

    <h1 id="hero-header" class="text-center">Sophia B. Photography</h1>
    <h2 class="text-center">Check out my work above</h2>

</div>
    <div id ="showcase" class="text-center pt-5">Showcase</div>
@for ($i = 0 ; $i <= 5 ; $i++)
{{--    @foreach($photos as $photo)--}}
{{--        {{$photo}}--}}
{{--    @endforeach--}}
@endfor
@endsection
