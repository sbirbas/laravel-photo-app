@extends('layouts.app')
@section('content')
    <div class="card align-content-center">
    <form id="post-image">
        <label for="image">Upload Image</label><br>
        <input type="file" name="images" value="{{old('images')}}"/>
        <input type="submit" value="Submit">
    </form>
    </div>
@endsection
