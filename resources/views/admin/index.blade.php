@extends('layout.layout')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-2">
            <h3 class="fw-bold py-4">{{ __('Halaman Dashboard Admin') }}</h3>
            <p class="mb-3">{{ __('Selamat Datang Di Dashboard Admin') }}</p>

            <div class="row justify-content-center p-4">
                <div class="col-lg-4 mx-7">
                    <div class="card rounded-3 border-1 p-2 mb-3 px-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ __('Artikel Blog') }}</h5>
                            <p class="card-text">{{ __('Atur dan Kelola Artikel Blog') }}</p>
                            <a href="{{ route('blog') }}" class="btn btn-success">{{ __('Buat Artikel Blog') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-7">
                    <div class="card rounded-3 border-1 p-2 mb-3 px-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ __('Foto Kegiatan') }}</h5>
                            <p class="card-text">{{ __('Atur dan Kelola Foto Kegiatan') }}</p>
                            <a href="{{ route('photo') }}" class="btn btn-success">{{ __('Buat Foto Kegiatan') }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
