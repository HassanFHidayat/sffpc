<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1C2E4A">
    <div class="container">
        <a class="navbar-brand" href="/">SFF-PC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ ($title === "List") ? 'active' : '' }}" href="/list">List</a>
                <a class="nav-link {{ ($title === "Rekomendasi") ? 'active' : '' }}" href="/rekomendasi">Rekomendasi</a>
                <a class="nav-link {{ ($title === "Alternatif") ? 'active' : '' }}" href="/alternatif">Alternatif</a>
            </div>
        </div>
    </div>
</nav>