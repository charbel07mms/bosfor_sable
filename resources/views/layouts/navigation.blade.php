<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="{{ asset('storage/logo.jpeg') }}" alt="Bosfor SARL" style="height:40px; object-fit:contain;">
            <span class="ms-2 fw-bold text-dark">Bosfor SARL</span>
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active fw-bold' : '' }}"
                        href="{{ route('dashboard') }}">Dashboard</a>
                </li>
            </ul>

            @auth
            <ul class="navbar-nav ms-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @endauth

            @guest
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('login') }}">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('register') }}">Inscription</a>
                </li>
            </ul>
            @endguest
        </div>
    </div>
</nav>
