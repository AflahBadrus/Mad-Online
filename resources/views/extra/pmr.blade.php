@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="mb-3">
                Home / Extra / Red Cross Teen
            </div>
            <img src="{{ asset('assets/images/pmr.png') }}" class="img-fluid mb-3" height="500" width="500" alt=""
                style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
            <div class="content-news">
                <p class="mb-3 text-secondary">21/2/2024</p>
                <h4 class="fw-bold mb-3">{{ __('Red Cross Teen') }}</h4>
                <p class="text-secondary">
                    {{ __('Palang Merah Remaja merupakan sebuah wadah pengembangan dan pembinaan remaja sebagai anggota yang dilaksanakan oleh PMI atau Palang Merah Indonesia. PMR menjadi ekskul yang penting bagi pengembangan diri dan karakter remaja sehingga PMR menjadi salah satu panel kekuatan PMI untuk melaksanakan kegiatan kemanusiaan dalam hal kesehatan, siaga bencana, kepemimpinan, dan masih banyak lagi.') }}
                </p>
                <p class="text-secondary">
                    {{ __('PMR didirikan pada tanggal 1 Maret 1950 di Indonesia, kemudian PMR berkembang menjadi organisasi kepemudaan di bawah naungan PMI. Organisasi ini biasanya ada di sekolah tingkat SD, SMP, dan SMA atau SMK. Tujuan ekskul PMR meningkatkan kesadaran dan pengetahuan kepada siswa dalam kesehatan dan pertolongan medis dasar atau sering disebut juga Pertolongan Pertama Pada Kecelakaan (P3K).') }}
                </p>
                <p class="text-secondary">
                    {{ __('Untuk menjadi anggota PMR secara resmi tentu ada beberapa syarat pembinaan yang wajib dipenuhi. Pembinaan ini biasanya diadakan oleh bagian pendidikan dan pelatihan diklat di sebuah sekolah atau bekerja sama dengan organisasi PMI.') }}
                </p>
                <p class="text-secondary">
                    {{ __('Dalam melaksanakan kegiatannya, terdapat sebuah istilah dalam PMR yang dinamakan Jumbara atau Jumpa Bhakti Gembira. Kegiatan ini termasuk dalam agenda besar yang mungkin bisa dibilang seperti jambore pada Pramuka. Sebagai informasi, kegiatan Jumbara akan dilaksanakan pada setiap tingkatan yaitu kabupaten, daerah, dan nasional. Tentu saja, pelaksanaan kegiatan tersebut tergantung pada organisasi PMI pada wilayah tertentu.') }}
                </p>
            </div>
        </div>
    </section>
@endsection
