@extends('layout.layout')

@section('content')
    <section class="py-2" style="margin-top: 100px">
        <div class="container col-xxl-8">
            <div class="d-flex">
            </div>

            <h4>{{ __('Halaman Buat Artikel') }}</h4>

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="">{{ __('Masukan Judul Artikel') }}</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul') }}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">{{ __('Pilih Foto') }}</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group mb-4">
                </div>
                <label for="">{{ __('Berita Artikel') }}</label>
                <div class="form-group mb-4">
                    <textarea name="desc" id="summernote">
                    {{ old('desc') }}
                </textarea>

                    @error('desc')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
            </form>

        </div>
    </section>
@endsection
