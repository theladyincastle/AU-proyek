<nav class="navbar navbar-expand-lg" style="background-color: #800020;">
    <div class="container">
        <a class="navbar-brand text-light fw-bold" href="{{ route('home') }}">AU Universe</a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth
                    {{-- <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('logout') }}">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
                    </li> --}}
                @endauth
            </ul>
        </div>
    </div>
</nav>
