@extends('layout.layout')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold mb-2">{{ __('Article Manage Page') }}</h3>
            <p>{{ __('Atur Dan Kelola Artikel KEgiatan Sekolah') }}</p>

            <div class="d-flex">
                <a href="{{ route('dashboard ') }}">{{ __('Home') }}</a>
                <div class="mx-1">/</div>
                <a href="{{ route('dashboard ') }}">{{ __('Article Blog') }}</a>
            </div>

        </div>
    </section>
@endsection
