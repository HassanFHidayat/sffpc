<nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue">
    <div class="container">
        <a class="navbar-brand" href="/">SFF-PC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                @can('pembeli')
                    <a class="nav-link {{ Request::is('rekomendasi*') ? 'active' : '' }}" href="/rekomendasi">Rekomendasi</a>
                    <a class="nav-link {{ Request::is('list*') ? 'active' : '' }}" href="/list">List</a>
                @endcan
                {{-- <a class="nav-link {{ Request::is('alternatif*') ? 'active' : '' }}" href="/alternatif">Alternatif</a> --}}
            </div>
            <div class="navbar-nav ms-auto">
                @auth
                <a href="#" class="nav-link disabled text-light">
                    Selamat Datang, {{ auth()->user()->nama }}
                </a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link border-0 bg-dark-blue">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                    {{-- <a class="nav-link {{ ($active === "logout") ? 'active' : '' }}" href="/logout">
                    </a> --}}
                </form>
                @else
                <a class="nav-link {{ Request::is('login*') ? 'active' : '' }}" href="/login">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </a>
                @endauth
            </div>
        </div>
    </div>
</nav>