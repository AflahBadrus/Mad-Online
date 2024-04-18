{{-- navbar --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow-sm' }}">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active shadow-sm p-3 mb-5 mx-2" aria-current="page"
                        href="/">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active shadow-sm p-3 mb-5 mx-2" href="/news">{{ __('News') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active shadow-sm p-3 mb-5 mx-2" href="/extra">{{ __('Extracurricular') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active shadow-sm p-3 mb-5 mx-2" href="/kegiatan">{{ __('School Activity') }}</a>
                </li>

            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger p-3">{{ __('Logout') }}</button>
                    </form>
                @else
                    <a href="/login"><button class="btn btn-success p-3">{{ __('Login') }}</button></a>

                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- navbar --}}
