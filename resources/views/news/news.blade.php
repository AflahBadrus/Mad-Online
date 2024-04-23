@extends('layout.layout')

@section('content')
    {{-- News --}}
    <section id="news" style="margin-top: 100px" class="py-5">
        <div class="container py-5 mb-3">
            <div class="header-news text-center">
                <h2 class="fw-bold">{{ __('News New') }}</h3>
            </div>
            <div class="row py-5 mb-3">
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid mb-3" alt=""
                                style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                            <div class="content-news">
                                <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                                <p class="text-secondary">#Madonsmkn1bangsri</p>
                                <a href="/detail/{{ $item->slug }}"
                                    class="text-decoration-none text-secondary">{{ __('Selengkapnya') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    {{-- News --}}
@endsection
