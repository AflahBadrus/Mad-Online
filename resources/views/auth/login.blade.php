@extends('layout.layout')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-2">
            <h3 class="fw-bold mb-3">{{ __('Halaman Login Admin') }}</h3>

            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">{{ __('Masukkan Email') }}</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="">{{ __('Masukan Password') }}</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">{{ __('Login') }}</button>

            </form>
        </div>
    </section>
@endsection
