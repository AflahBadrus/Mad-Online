@extends('layout.layout')

@section('content')
    {{-- News --}}
    <section id="news" style="margin-top: 100px" class="py-5">
        <div class="container py-5">
            <div class="header-news text-center">
                <h2 class="fw-bold">{{ __('Extraculicular') }}</h3>
            </div>
            <div class="row py-5">
                <div class="col-lg-4 mx-auto">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/pramuka.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Scout') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/pramuka" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto">
                    <div class="card border-0 ">
                        <img src="{{ asset('assets/images/jurnal.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Journalism') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/jurnal" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/futsal.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Futsal') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/futsal" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row py-5">
                <div class="col-lg-4 mx-auto mb-3">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/pmr.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Red Cross Teen') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/pmr" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/voli.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Volly Ball') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/voli" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/pa.png') }}" class="img-fluid mb-3" alt=""
                            style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
                        <div class="content-news">
                            <p class="mb-3 text-secondary">21/2/2024</p>
                            <h4 class="fw-bold mb-3">{{ __('Nature lovers') }}</h4>
                            <p class="text-secondary">#Madonsmkn1bangsri</p>
                            <a href="/extra/pa" class="text-decoration-none text-primary">{{ __('More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- News --}}
@endsection
