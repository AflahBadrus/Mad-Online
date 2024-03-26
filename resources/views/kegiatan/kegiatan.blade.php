@extends('layout.layout')

@section('content')
    {{-- News --}}
    <section id="news" style="margin-top: 100px" class="py-5">
        <div class="container py-5">
            <div class="header-news text-center">
                <h2 class="fw-bold mb-5">{{ __('Activity') }}</h3>
                    <div class="container">
                        <div class="row row-cols-lg-3 mb-5">
                            @foreach ($data as $item)
                                <div class="col">
                                    <img src="{{ asset('storage/photo/' . $item->image) }}" class="img-fluid mb-5"
                                        height="300" width="300" alt=""
                                        style="aspect-ratio: 16/9; object-fit:cover; border-radius:10px">
                                </div>
                            @endforeach

                        </div>


                    </div>
            </div>
    </section>
    {{-- News --}}
@endsection
