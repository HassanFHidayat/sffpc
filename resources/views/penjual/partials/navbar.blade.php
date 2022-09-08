<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    {{-- <span data-feather="home" class="align-text-bottom"></span> --}}
                    <i data-feather="home"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('alternatif*') ? 'active' : '' }}" href="/dashboard/alternatif">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Alternatif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="/">
                    <span data-feather="globe" class="align-text-bottom"></span>
                    Halaman Utama
                </a>
            </li>
        </ul>
    </div>
</nav>