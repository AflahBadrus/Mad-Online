@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">

        <div class="container col-xxl-8">
            <div class="mb-3">
                Home / News / Mrs. Sukowati Post-Duty Farewell
            </div>
            {{ $artikel->judul }}
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-fluid mb-3" alt=""
                style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
            <div class="content-extra">
                <p class="mb-3 text-secondary">21/2/2024</p>
                <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>

    </section>
@endsection
