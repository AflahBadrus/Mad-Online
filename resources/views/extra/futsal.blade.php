@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/futsal.png') }}" class="img-fluid mb-3" height="500" width="500"
                    alt="" style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
            </div>
            <div class="content-news">
                <p class="mb-3 text-secondary">21/2/2024</p>
                <h4 class="fw-bold mb-3">{{ __('Futsal') }}</h4>
                <p class="text-secondary">
                    {{ __('Futsal adalah sebuah olahraga yang mirip dengan sepak bola, namun dimainkan dalam ruangan dengan lapangan yang lebih kecil dan menggunakan bola yang lebih kecil. Istilah "futsal" sendiri berasal dari bahasa Spanyol, "futbol de salon" yang berarti "sepak bola dalam ruangan". Permainan ini biasanya dimainkan oleh dua tim dengan masing-masing tim terdiri dari lima pemain, salah satunya adalah kiper.') }}
                </p>
            </div>
        </div>
    </section>
@endsection
