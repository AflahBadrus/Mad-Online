@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">

        <div class="container col-xxl-8">
            <div class="mb-3">
                {{ $artikel->judul }}
            </div>
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-fluid" alt=""
                style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
            <div class="content-extra">
                <p class="mb-3 text-secondary">{{ $artikel->created_at }}</p>
                <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>

    </section>
@endsection
