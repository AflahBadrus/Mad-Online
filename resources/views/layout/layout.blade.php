<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/icons/icon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>{{ __('Mad Online') }}</title>

</head>

<body>


    {{-- navbar --}}

    @include('layout.navbar')

    {{-- content --}}

    @yield('content')

    {{-- Footer --}}
    <section id="footer">
        <div class="conatiner py-5 mx-5" data-aos="fade-up">
            <footer>
                <div class="row">
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">{{ __('Navigasi') }}</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="/"
                                        class="nav-link p-0 text-muted text-success">{{ __('Beranda') }}</a></li>
                                <li class="nav-item mb-2"><a href="/news"
                                        class="nav-link p-0 text-muted text-success">{{ __('Berita') }}</a></li>
                                <li class="nav-item mb-2"><a href="/extra"
                                        class="nav-link p-0 text-muted text-success">{{ __('Ekstrakulikuller') }}</a>
                                </li>
                                <li class="nav-item mb-2"><a href="/kegiatan"
                                        class="nav-link p-0 text-muted text-success">{{ __('Foto Kegiatan') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-6">
                        <h5 class="fw-bold mb-3">{{ __('Ikuti Sosmed Kami') }}</h5>
                        <div class="d-flex mb-3 py-2 justify-content-start">
                            <a
                                href="https://www.instagram.com/smkn1bangsri.official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img
                                    src="{{ asset('assets/images/ig.png') }}" width="22" height="22"
                                    class="img fluid mx-2" alt=""></a>
                            <a href="https://www.youtube.com/@SMKN1BANGSRI"><img
                                    src="{{ asset('assets/images/yt.png') }}" width="28" height="22"
                                    class="img fluid mx-2" alt=""></a>
                            <a href="https://www.facebook.com/pages/Smk-Negeri-1-Bangsri/123509761313684"><img
                                    src="{{ asset('assets/images/fb.png') }}" width="27" height="27"
                                    class="img fluid mx-2" alt=""></a>

                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold">{{ __('Kontak Kami') }}</h5>
                        <p class="">Email</p>
                        <p class="">smkn1bangsri@yahoo.co.id</p>
                        <p class="">{{ __('Phone : ( 291 ) 772321') }}</p>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold">{{ __('Alamat') }}</h5>
                        <p class="">Alamat</p>
                        <p class="">JL. KH. Achmad Fauzan <br> No. 17 Bangsri Jepara</p>

                    </div>
                </div>
            </footer>
        </div>
    </section>

    {{-- Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");

            } else
                navbar.classList.remove("scroll-nav-active");
            navbar.classList.remove("text-nav-active");
        }

        AOS.init();
    </script>

    {{-- Summernote CSS di antara Head --}}




    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>

</body>

</html>
