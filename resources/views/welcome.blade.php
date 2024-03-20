@extends('layout.layout')

@section('content')
    {{-- Hero --}}
    <section id="hero">
        <div class="container text-center text-white py-5">
            <div class="hero-title" data-aos="fade-up-right">
                <div class="hero-text">{{ __('Welcome To') }} <br> {{ __('Mading of SMK N 1 Bangsri') }}</div>
            </div>
        </div>

    </section>
    {{-- Hero --}}

    {{-- Program --}}
    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3" data-aos="fade-up-right">
                    <div class="bg-white rounded-3 mb-3 p-3 shadow d-flex justify-content-between align-items-center">
                        <div>
                            <p class="fw-bold">{{ __('Education') }} <br> {{ __('Quality') }}</p>
                        </div>
                        <img src="{{ asset('assets/images/photo2.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="fade-up-left">
                    <div class="bg-white rounded-3 mb-3 p-3 shadow d-flex justify-content-between align-items-center">
                        <div>
                            <p class="fw-bold">{{ __('Extracurricular') }} <br> {{ __('Activities') }}</p>
                        </div>
                        <img src="{{ asset('assets/images/photo.png') }}"height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="fade-up-right">
                    <div class="bg-white rounded-3 mb-3 p-3 shadow d-flex justify-content-between align-items-center">
                        <div>
                            <p class="fw-bold">{{ __('Job') }} <br> {{ __('Promotion') }}</p>
                        </div>
                        <img src="{{ asset('assets/images/photo3.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="fade-up-left">
                    <div class="bg-white rounded-3 mb-3 p-3 shadow d-flex justify-content-between align-items-center">
                        <div>
                            <p class="fw-bold">Pendidikan <br> Berkualitas</p>
                        </div>
                        <img src="{{ asset('assets/images/photo1.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Program --}}

    {{-- Jurusan --}}
    <section>
        <div class="container mx-6 py-5">
            <div class="row">
                <div class="col mx-3" data-aos="fade-up-right">
                    <img src="{{ asset('assets/images/jurusanto.png') }}" class="img-fluid" width="100" height="100"
                        alt="">
                </div>
                <div class="col mx-3" data-aos="fade-down-left">
                    <img src="{{ asset('assets/images/jurusanrpl.png') }}" class="img-fluid" width="100" height="100"
                        alt="">
                </div>
                <div class="col mx-3" data-aos="fade-up">
                    <img src="{{ asset('assets/images/jurusanakl.png') }}" class="img-fluid" width="120" height="120"
                        alt="">
                </div>
                <div class="col mx-3" data-aos="fade-down-right">
                    <img src="{{ asset('assets/images/jurusanotkp.png') }}" class="img-fluid" width="120" height="120"
                        alt="">
                </div>
                <div class="col mx-3" data-aos="fade-up-left">
                    <img src="{{ asset('assets/images/jurusanpm.png') }}" class="img-fluid" width="120" height="120"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Jurusan --}}

    {{-- News --}}
    <section id="news">
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
            <div class="footer-berita text-center">
                <a href="/news" class="btn btn-outline-success">{{ __('News More') }}</a>
            </div>
        </div>
    </section>
    {{-- News --}}

    {{-- Extracurricular --}}
    <section id="ekstra" class="py-5" data-aos="fade-up-left">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 ">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-3"></div>
                        <h5>{{ __('Extracurricular') }}</h5>
                    </div>
                    <h1 class="py-3 fw-bold">
                        {{ __('Join The Extracurricular Be The Next Generation According to your interests ') }}</h1>
                    <p class="mb-3">
                        {{ __('Are you confused about what extracurricular to choose? The first way is to choose extracurriculars that match your hobbies, interests, talents or abilities. Extracurriculars are basically used to channel and develop the abilities they have so that they develop further and can be used in the future.') }}
                    </p>
                    <a href="/extra" class="btn btn-outline-primary">{{ __('More') }}</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/ekstraduo.png') }}" class="img-fluid" alt="">
                </div>
            </div>
    </section>
    {{-- Extracurricular --}}

    {{-- Activity Photo --}}
    <section id="photo" class=" section-foto paralax py-5">
        <div class="container py-5" data-aos="fade-down-right">
            <div class="d-flex justify-content-between align-itmes-center">
                <div class="d-flex align-items-center">
                    <div class="stripe-primary me-3"></div>
                    <h5 class="fw-bold text-white">{{ __('Activity School Photo') }}</h2>

                </div>
                <div class="">
                    <a href="/kegiatan" class="btn btn-outline-primary text center mb-3">{{ __('View All ') }}</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-3">
                    <a href="{{ asset('assets/images/berita9.png') }}" class="image-link">

                        <img src="{{ asset('assets/images/berita9.png') }}" class="img-fluid" alt=""
                            style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <a href="{{ asset('assets/images/berita2.png') }}" class="image-link">

                        <img src="{{ asset('assets/images/berita2.png') }}" class="img-fluid" alt=""
                            style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <a href="{{ asset('assets/images/berita7.png') }}" class="image-link">

                        <img src="{{ asset('assets/images/berita7.png') }}" class="img-fluid" alt=""
                            style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                    </a>
                </div>
            </div>
        </div>

    </section>
    {{-- Activity Photo --}}
@endsection
