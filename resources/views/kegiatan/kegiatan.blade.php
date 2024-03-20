@extends('layout.layout')

@section('content')
    {{-- News --}}
    <section id="news" style="margin-top: 100px" class="py-5">
        <div class="container py-5">
            <div class="header-news text-center">
                <h2 class="fw-bold">{{ __('Activity') }}</h3>
            </div>
            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-success">{{ __('Activity More') }}</a>
            </div>
        </div>
    </section>
    {{-- News --}}
@endsection
