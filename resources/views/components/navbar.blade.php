<div class="navbar-content">
    <div class="sidebar">
        <a href="{{ route('home') }}">S.B Photography</a>

        <a href="{{ route('about') }}">About</a>

        <a href="{{ route('photos.index', ['description' => 'astro']) }}">Astronomy</a>
        <a href="{{ route('photos.index', ['description' => 'nature']) }}">Nature</a>
        <a href="{{ route('photos.index', ['description' => 'water']) }}">Water</a>

        <a href="https://buymeacoffee.com/sb062924">Support <i class="fa-solid fa-mug-hot"></i></a>

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in <i class="fa-solid fa-lock"></i></a>
            @endauth
        @endif
    </div>

    <div class="hamburger" onclick="toggleMenu()">
        <i class="fa fa-bars"></i>
    </div>
    <script>
        function toggleMenu() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
</div>
