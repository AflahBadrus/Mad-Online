@extends('layout.layout')

@section('content')
    {{-- News --}}
    <section id="news" style="margin-top: 100px" class="py-2">
        <div class="container py-2">
            <div class="header-news text-center">
                <h2 class="fw-bold mb-5">{{ __('Foto Kegiatan') }}</h3>
                    <div class="container">
                        <div class="row row-cols-lg-3 mb-5">
                            @foreach ($data as $item)
                                <div class="col-12 text-dark">
                                    <img src="{{ asset('storage/photo/' . $item->image) }}" class="img-fluid" alt=""
                                        style="aspect-ratio: 16/9; object-fit:cover; border-radius:5px">
                                    <p class="py-2">{{ $item->judul }}</p>
                                </div>
                            @endforeach

                        </div>


                    </div>
            </div>
    </section>
    {{-- News --}}
@endsection
