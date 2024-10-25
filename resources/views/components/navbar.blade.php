<div>
    <nav class="navbar">
        @if (Route::has('login'))
            <nav>
                @auth
                    <div class="nav-item">
                    <a href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                    </div>
                @else
                    <a href="{{ route('login') }}">
                        Log in
                    </a>
                    <div class="nav-item">

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                        <div class="nav-item"

                @endauth
            </nav>
        @endif

    </nav>

</div>
