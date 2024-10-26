@extends('layouts.app')
@section('content')
    <div id="login-card" class="card">
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button class="btn" type="submit">Login</button>
</form>
    </div>
@endsection
