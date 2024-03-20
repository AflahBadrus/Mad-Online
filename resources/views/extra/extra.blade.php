@extends('layout.layout')

@section('content')
    {{-- News --}}
    <section id="news" style="margin-top: 100px" class="py-5">
        <div class="container py-5">
            <div class="header-news text-center">
                <h2 class="fw-bold">{{ __('Extraculicular') }}</h3>
            </div>
            <div class="row py-5">
                <div class="col-lg-4" data-aos="fade-down-right">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/ekstra1.png') }}" class="img-fluid mb-3" alt="">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Mrs. Sukowati post-duty farewell') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/detail" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0"data-aos="fade-up">
                        <img src="{{ asset('assets/images/ekstra3.png') }}" height="200" width="350"
                            class="img-fluid mb-3" alt="">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Practice LDK') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/detail2" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down-left">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/ekstra.png') }}" class="img-fluid mb-3" alt="">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Building OSIS Leadership') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/detail3" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-success">{{ __('Extraculicular More') }}</a>
            </div>
        </div>
    </section>
    {{-- News --}}
@endsection
