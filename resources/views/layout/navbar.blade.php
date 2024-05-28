{{-- Navbar --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top bg-white ">
    <div class="container text-center">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/icon.png') }}" alt="" class="img-fluid" width="50  " height="50  ">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active mx-2" aria-current="page" href="/">{{ __('Beranda') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-2" href="/news">{{ __('Berita') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-2" href="/kegiatan">{{ __('Foto Kegiatan') }}</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
{{-- Navbar --}}
