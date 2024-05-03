{{-- Navbar --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top bg-white ">
    <div class="container text-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active mx-2" aria-current="page" href="/">{{ __('Beranda') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-2" href="/news">{{ __('Berita') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-2" href="/extra">{{ __('Ekstrakullikuler') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-2" href="/kegiatan">{{ __('Foto Kegiatan') }}</a>
                </li>

            </ul>
            <div class="">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">{{ __('Logout') }}</button>
                    </form>
                @else
                    <a href="/login"><button class="btn btn-success">{{ __('Login') }}</button></a>

                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- Navbar --}}
