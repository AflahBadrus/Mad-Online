@extends('layout.layout')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold py-4">{{ __('Dashboard Admin Page') }}</h3>
            <p class="mb-3">{{ __('Welcome Of Dashboard Admin') }}</p>

            <div class="row justify-content-center p-4">
                <div class="col-lg-4 mx-7">
                    <div class="card rounded-3 border-1 p-2 mb-3 px-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ __('Blog Article') }}</h5>
                            <p class="card-text">{{ __('Organize and Manage Blog Articles') }}</p>
                            <a href="{{ route('blog') }}" class="btn btn-success">{{ __('Create') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-7">
                    <div class="card rounded-3 border-1 p-2 mb-3 px-5">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ __('Photo Activity') }}</h5>
                            <p class="card-text">{{ __('Organize and Manage Photo Articles') }}</p>
                            <a href="{{ route('photo') }}" class="btn btn-success">{{ __('Create') }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
