@extends('layouts.app')
@section('content')
<div id="hero">


</div>
    <div id ="showcase" class="text-center pt-5">Showcase</div>
@for ($i = 0 ; $i <= 5 ; $i++)
{{--    @foreach($photos as $photo)--}}
{{--        {{$photo}}--}}
{{--    @endforeach--}}
@endfor
@endsection
