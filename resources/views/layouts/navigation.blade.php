
    <div class="card card-mx-3">
        <div>
            <div>
                <div>
                    <a href="{{ route('dashboard') }}">
                    </a>
                </div>

                <div>
                    <a href="{{ route('dashboard') }}">
                        {{ __('Dashboard') }}
                    </a>
                </div>
            </div>

            <div>
                <div>
                    <button>
                        <div>{{ Auth::user()->name }}</div>
                    </button>

                    <div>
                        <a href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>

                        <!-- Authentication -->
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

            <div>
                <button onclick="toggleMenu()">

                </button>
            </div>
        </div>
    </div>

    <div>
        <div>
            <a href="{{ route('dashboard') }}">
                {{ __('Dashboard') }}
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


