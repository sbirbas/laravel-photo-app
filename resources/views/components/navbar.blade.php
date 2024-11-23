<div>
    <nav class="navbar navbar-expand-lg bg-slate-500">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">S.B Photography</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('photos.index', ['description' => 'astro']) }}">
                                    Astronomy
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('photos.index', ['description' => 'nature']) }}">
                                    Nature
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('photos.index', ['description' => 'water']) }}">
                                    Water
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('photos.index', ['description' => 'other']) }}">
                                    Miscellaneous
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="nav-link" href="https://buymeacoffee.com/sb062924">Support <i class="fa-solid fa-mug-hot"></i></a>
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
        </div>
    </nav>
</div>
