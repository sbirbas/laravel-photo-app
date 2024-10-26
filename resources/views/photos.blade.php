@extends('layouts.app')
@section('content')
    <div class="col-4"
    @foreach($photos as $photo)
        <img src="{{ asset('storage/' . $photo->url) }}" alt="Photo" />
    @endforeach
    </div>


@endsection
