<div>
    <script src="https://kit.fontawesome.com/44197f5589.js" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-slate-500 justify-content-between">
        <div class="container-fluid">
            <a class="nav-link" href="{{ route('home') }}">
                Home</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('photos.index') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.buymeacoffee.com/sophiabirbl">Buy me a <i class="fa-solid fa-mug-hot"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Log in <i class="fa-solid fa-lock"></i></a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
