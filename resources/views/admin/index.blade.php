@extends('layout.layout')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold mb-3">{{ __('Dashboard Admin Page') }}</h3>
            <p>{{ __('Welcome Of Dashboard Admin') }}</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/berita5.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('Blog Article') }}</h5>
                            <p class="card-text">{{ __('Organize and Manage School Activity Articles') }}</p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">{{ __('Create') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/berita.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('Photo Activity') }}</h5>
                            <p class="card-text">{{ __('Organize and Manage School Activity Articles') }}</p>
                            <a href="{{ route('photo') }}" class="btn btn-primary">{{ __('Create') }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
