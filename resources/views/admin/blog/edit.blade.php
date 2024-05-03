@extends('layout.layout')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">

            <div class="d-flex">
                <a href="{{ route('blog') }}">{{ __('Blog') }}</a>
                <div class="mx-1"> . </div>
                <a href="">{{ __('Buat Artikel') }}</a>
            </div>

            <h4 class="fw-bold mb-3">{{ __('Halaman Edit Artikel') }}</h4>

            <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="">{{ __('Enter the Article Title') }}</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul', $artikel->judul) }}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="detail-admin-edit form-group mb-4">
                    <label for="">{{ __('Select Activity Photo') }}</label>
                    <input type="hidden" name="old_image" value="{{ $artikel->image }}">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    <div class="edit-img">
                        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="col-lg-4" alt="">
                    </div>

                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">{{ __('News Article') }}</label>
                    <textarea name="desc" id="summernote">
                    {!! $artikel->desc !!}
                </textarea>

                    @error('desc')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
        </div>
    </section>
@endsection
