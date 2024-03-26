@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8 ">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/pa.png') }}" class="img-fluid mb-3" height="500" width="500"
                    alt="" style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
            </div>
            <div class="content-news">
                <p class="mb-3 text-secondary">21/2/2024</p>
                <h4 class="fw-bold mb-3">{{ __('Natural Lovers') }}</h4>
                <p class="text-secondary">
                    {{ __('Tumbuhnya kegiatan alam bebas dalam bentuk petualangan tersebut sangat baik, karena sebagai kegiatan ekstra kurikuler (ekskul), pencinta alam menjadi praktik pendidikan karakter yang paling bernas dan berkelanjutan. Jika pada era 1970-an kegiatan ini masih dianggap elitis dan perbuatan nekat, saat ini sudah menjadi tren. Tren mendaki gunung, misalnya. Di era tersebut kelompok yang bergaung di tingkat nasional hanya sedikit, sebutlah misalnya Mapala UI, Wanadri, atau Aranyacala Trisakti. Saat ini, hampir tak ada perguruan tinggi di Indonesia yang tak punya klub pencinta alam. Pun, demikian dengan SMA/SMK yang umumnya punya ekskul pencinta alam. Ekskul ini dibanjiri murid yang ingin berekspresi dan terlihat keren.
                                                                                                                        Kegiatan ekskul pecinta alam hampir mirip dengan ekskul pramuka.
                                                                                                                        Namun ekskul pecinta alam lebih mengedepankan rasa cinta kepada alam. Kegiatannya pun seperti ke gunung, kampanye kebersihan tentang sampah di gunung dan lain-lain.
                                                                                                                        Biasanya kegiatan ekskul pecinta alam banyak dilakukan di luar sekolah.
                                                                                                                        Kegiatan Pecinta Alam adalah aktivitas dari sekelompok orang dalam menikmati alam sekitar dan biasanya diwujudkan dengan mendaki gunung. Banyak yang memandang sebelah mata dengan kegiatan ini. Karena sebagian orang menganggap kegiatan pecinta alam ini hanya buang – buangg energi semata dan kegiatan hura – hura. Padahal jika disikapi dengan baik, kegiatan pecinta alam ini merupakan salah satu aktivitas yang punya banyak manfaat bagi pengembangan diri manusia. Bagaimana tidak, baru masuk aja biasanya sudah dikerjain oleh para senior. Beragam tugas aneh dan nyeleneh juga harus dilakukan sebelum resmi diakui menjadi anggota pecinta alam.') }}
                </p>
            </div>
        </div>
    </section>
@endsection
