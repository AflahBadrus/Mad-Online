@extends('layout.layout')

@section('content')
    {{-- News --}}
    <section id="news" style="margin-top: 100px" class="py-5">
        <div class="container py-5">
            <div class="header-news text-center">
                <h2 class="fw-bold">{{ __('News New') }}</h3>
            </div>
            <div class="row py-5">
                <div class="col-lg-4" data-aos="fade-down-right">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/berita8.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Mrs. Sukowati post-duty farewell') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/detail" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0"data-aos="fade-up">
                        <img src="{{ asset('assets/images/berita1.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Practice LDK') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/detail2" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down-left">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/berita7.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Building OSIS Leadership') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/detail3" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- News --}}
@endsection
