@if(Request::is('perhitungan*'))
@else
<footer class="footer mt-auto py-3 bg-light">
    <div class="container d-flex">
        <div class="col">
            <span class="text-muted">185410003 | Hassan Fasya Hidayat &copy; 2022</span>
        </div>
        <div class="col d-flex justify-content-end">
            @guest
            <span class="text-muted">
                <a href="/register/penjual" class="text-decoration-none text-muted">Registrasi Penjual</a>
            </span>
            @endguest
        </div>
    </div>
</footer>
@endif