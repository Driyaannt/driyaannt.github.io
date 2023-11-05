<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.beranda') }}">KostSync</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="menu"></ion-icon> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') || request()->routeIs('user.beranda') ? 'active' : '' }}">
                    <a href="{{ route('user.beranda') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item {{ request()->routeIs('user.tentang') ? 'active' : '' }}">
                    <a href="{{ route('user.tentang') }}" class="nav-link">Tentang</a>
                </li>
                <li class="nav-item {{ request()->routeIs('user.sewa') || request()->routeIs('user.cabang-kost') || request()->routeIs('user.detail-kamar') ? 'active' : '' }}">
                    <a href="{{ route('user.sewa') }}" class="nav-link">Sewa</a>
                </li>
                <li class="nav-item {{ request()->routeIs('user.kontak') ? 'active' : '' }}">
                    <a href="{{ route('user.kontak') }}" class="nav-link">Kontak</a>
                </li>
                <p><a href="{{Route('login')}}" class="btn btn-black py-2 px-3 mt-2 text-warning">Masuk/Register</a></p>
            </ul>
        </div>
    </div>
</nav>
