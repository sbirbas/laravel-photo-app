<div>
    <nav class="navbar navbar-expand bg-slate-500">
        <div class="container-fluid">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about') }}">About</a>
                <a class="nav-link" href="{{ route('photos.index') }}">Gallery</a>
                <a class="nav-link" href="https://buymeacoffee.com/sb062924">Buy me a <i class="fa-solid fa-mug-hot"></i></a>
            </div>
            <div class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Log in <i class="fa-solid fa-lock"></i></a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>
</div>
