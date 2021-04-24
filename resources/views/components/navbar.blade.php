<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand ms-2 text-light" href="{{ route('homepage') }}">Home</a>
        <a class="navbar-brand text-light" href="#">Chi Siamo</a>
        <a class="navbar-brand text-light" href="#">L'azienda</a>
        <a class="navbar-brand text-light" href="#">Dove siamo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @auth
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                    <li class="nav-item">
                        <a class="nav-link text-light me-2" aria-current="page"
                            href="{{ route('order.create') }}">Ordina</a>
                    </li>
                    <a class="nav-link text-light me-5" href="#">Contattaci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light me-5" href="{{ route('order.index') }}">I tuoi ordini</a>
                    </li>
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link dropdown-toggle ms-5 text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu ms-5" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="" onclick="event.preventDefault();
                                  document.getElementById('logout').submit();">Logout</a></li>
                            <form action="{{ route('logout') }}" method="POST" id="logout">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            @endauth
            @guest
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Accedi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </div>
</nav>
