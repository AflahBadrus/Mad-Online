@extends('layout.layout')

@section('content')
    {{-- Hero --}}
    <section id="hero">
        <div class="container text-center text-white py-5">
            <div class="hero-title">
                <div class="hero-text">{{ __('Selamat Datang') }} <br> {{ __('Mading SMK Negeri 1 Bangsri') }}</div>
            </div>
        </div>
        <div class="container text-center text-light py-3">
            <p class="fw-bold">{{ __('Pengin Kerjo Sak Wisse Sekolah, Sekolah Menengah Kejuruan Solusine') }}</p>
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
                            <p class="fw-bold">{{ __('Kualitas') }} <br> {{ __('Pendidikan') }}</p>
                        </div>
                        <img src="{{ asset('assets/images/photo2.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="fade-up-left">
                    <div class="bg-white rounded-3 mb-3 p-3 shadow d-flex justify-content-between align-items-center">
                        <div>
                            <p class="fw-bold">{{ __('Kegiatan') }} <br> {{ __('Ekstrakulikuler') }}</p>
                        </div>
                        <img src="{{ asset('assets/images/photo.png') }}"height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="fade-up-right">
                    <div class="bg-white rounded-3 mb-3 p-3 shadow d-flex justify-content-between align-items-center">
                        <div>
                            <p class="fw-bold">{{ __('Promosi') }} <br> {{ __('Pekerjaan') }}</p>
                        </div>
                        <img src="{{ asset('assets/images/photo3.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="fade-up-left">
                    <div class="bg-white rounded-3 mb-3 p-3 shadow d-flex justify-content-between align-items-center">
                        <div>
                            <p class="fw-bold">{{ __('Keterampilan') }} <br> {{ __('Kreatif') }}</p>
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
        <div class="container text-center justify-content-center mx-6 py-5">
            <div class="row">
                <div class="col-lg-2 col-md-6 mb-5 mx-3 " data-aos="fade-up-right">
                    <a href="http://tbsm.smkn1bangsri.sch.id/"><img src="{{ asset('assets/images/jurusanto.png') }}"
                            class="img-fluid" width="130" height="130" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mx-3 " data-aos="fade-down-left">
                    <a href="http://pplg.smkn1bangsri.sch.id/"><img src="{{ asset('assets/images/jurusanrpl.png') }}"
                            class="img-fluid" width="120" height="120" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mx-3 " data-aos="fade-up">
                    <a href="http://akl.smkn1bangsri.sch.id/"><img src="{{ asset('assets/images/jurusanakl.png') }}"
                            class="img-fluid" width="140" height="140" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mx-3 " data-aos="fade-down-right">
                    <a href="http://mplb.smkn1bangsri.sch.id/"><img src="{{ asset('assets/images/jurusanotkp.png') }}"
                            class="img-fluid" width="140" height="140" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-6 mb-3 mx-3 " data-aos="fade-up-left">
                    <a href="http://pm.smkn1bangsri.sch.id/"><img src="{{ asset('assets/images/jurusanpm.png') }}"
                            class="img-fluid" width="140" height="140" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    {{-- Jurusan --}}

    {{-- News --}}
    <section id="news">
        <div class="container py-5">
            <div class="header-news text-center">
                <h2 class="fw-bold">{{ __('Berita Terkini') }}</h3>
            </div>
            <div class="row py-5">
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <a href="/detail/{{ $item->slug }}"><img
                                    src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid mb-3"
                                    alt="" style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px"></a>
                            <div class="content-news py-2">
                                <p class="mb-3 text-secondary">{{ $item->created_at->format('d M Y') }}</p>
                                <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-black">
                                    <h4>{{ $item->judul }}</h4>
                                </a>
                            </div>
                            <div class="content-news py-2">
                                <p class="text-secondary">#Madonsmkn1bangsri</p>
                                <a href="/detail/{{ $item->slug }}"
                                    class="text-decoration-none text-secondary">{{ __('Selengkapnya') }}</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="footer-berita text-center">
                <a href="{{ route('news') }}" class="btn btn-outline-success">{{ __('Berita Selengkapnya') }}</a>
            </div>
        </div>
    </section>
    {{-- News --}}

    {{-- Extracurricular --}}
    <section id="ekstra" class="py-5">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 ">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>{{ __('Ekstrakulikuler') }}</h5>
                    </div>
                    <h1 class="py-3 fw-bold">
                        {{ __('Ikuti Ekstrakurikuler Jadilah Generasi Penerus Sesuai Minat Anda ') }}</h1>
                    <p class="mb-3">
                        {{ __('Bingung mau pilih ekstrakurikuler apa? Cara yang pertama adalah dengan memilih ekstrakurikuler yang sesuai dengan hobi, minat, bakat atau kemampuan. Ekstrakurikuler pada dasarnya digunakan untuk menyalurkan dan mengembangkan kemampuan yang dimilikinya agar semakin berkembang dan dapat digunakan di masa depan.') }}
                    </p>
                    <a href="#" class="btn btn-outline-primary">{{ __('Selengkapnya') }}</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/ekstraduo.png') }}" class="img-fluid" alt="">
                </div>
            </div>
    </section>
    {{-- Extracurricular --}}

    {{-- Activity Photo --}}
    <section id="photo" class=" section-foto py-2">
        <div class="container py-3">
            <div class="d-flex justify-content-between align-itmes-center">
                <div class="d-flex align-items-center">
                    <div class="stripe-primary me-2"></div>
                    <h5 class="fw-bold text-black py-3">{{ __('Foto Kegiatan') }}</h2>

                </div>
                <div class="">
                    <a href="{{ route('kegiatan') }}"
                        class="btn btn-danger text-center mb-3">{{ __('Lihat Semua') }}</a>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($photos as $item)
                    <div class="col-3 mx-2">
                        <div class="col text-dark text-center  shadow-sm">
                            <img src="{{ asset('storage/photo/' . $item->image) }}" class="img-fluid" alt=""
                                style="aspect-ratio: 16/9; object-fit:cover; border-radius:5px">
                            <p class="py-2">{{ $item->judul }}</p>

                        </div>
                        <a href="" class="image-link">

                        </a>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
    {{-- Activity Photo --}}
@endsection
