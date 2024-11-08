@extends('layouts.app')
@section('content')
    <div>
        <div>
            <a href="{{ route('dashboard') }}">
            </a>
        </div>

        <div>
            <div>
                <div>{{ Auth::user()->name }}</div>
                <div>{{ Auth::user()->email }}</div>
            </div>

            <div>
                <a href="{{ route('profile.edit') }}">
                    {{ __('Profile') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection

