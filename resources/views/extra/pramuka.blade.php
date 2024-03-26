@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/pramuka.png') }}" class="img-fluid mb-3" height="500" width="500"
                    alt="" style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
            </div>
            <div class="content-news">
                <p class="mb-3 text-secondary">21/2/2024</p>
                <h4 class="fw-bold mb-3">{{ __('Scout') }}</h4>
                <p class="text-secondary">
                    {{ __('Pramuka pertama kali dikenalkan oleh Robert Baden Powell pada tahun 1908 dalam sebuah buku berjudul Scouting For Boys yang isinya berupa gagasan tentang pendidikan luar sekolah untuk anak-anak. Buku ini cepat tersebar di Inggris dan negara-negara lain yang kemudian berdiri organisasi kepramukaan yang semula hanya untuk laki-laki dengan nama Boys Scout. Tahun 1912 didirikan organisasi kepramukaan untuk wanita dengan nama Girl Guides.') }}
                </p>
                <p class="text-secondary">
                    {{ __('Pramuka di Indonesia mulai dibentuk secara resmi pada tahun 1945 dengan nama Pandu Rakyat Indonesia. Ipindo merupakan federasi bagi organisasi kepramukaan putra, Pada 1953 Ipindo berhasil menjadi anggota kepramukaan sedunia sedangkan bagi organisasi puteri terdapat dua federasi yaitu PKPI (Persatuan Kepanduan Puteri Indonesia) dan POPPINDO (Persatuan Organisasi Pandu Puteri Indonesia). Terdapat banyak organisasi-organisasi kepanduan di Indonesia yang menimbulkan perpecahan, maka pada tahun 1961 organisasi-organisasi dipersatukan dalam satu wadah Gerakan Pramuka melalui Keputusa Presiden RI No. 238  Tahun 1961 tentang Gerakan pramuka') }}
                </p>
                <p class="text-secondary">
                    {{ __('Gerakan Pramuka merupakan wadah pembinaan bagi anak-anak dan pemuda Indonesia agar menjadi manusia yang berkepribadian dan berwatak luhur serta tinggi mental, pantang menyerah, moral budi pekerti, dan kuat keberagamaan, sehat jasmani dan rohani serta mempunyai tanggung jawab kemasyarakatan dan kebangsaan.') }}
                </p>
            </div>
        </div>
    </section>
@endsection
