@extends('layout.layout')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/voli.png') }}" class="img-fluid mb-3" height="500" width="500"
                    alt="" style="aspect-ratio: 1/1; object-fit:cover; border-radius:10px">
            </div>
            <div class="content-news">
                <p class="mb-3 text-secondary">21/2/2024</p>
                <h4 class="fw-bold mb-3">{{ __('Volly Ball') }}</h4>
                <p class="text-secondary">
                    {{ __('Kebanyakan sekolah memasukan kemampuan bahasa asing di dalam kualifikasi yang harus dimiliki siswanya. Karena rata-rata yang diprioritaskan dapat menguasai bahasa asing, maka kamu yang seorang mahasiswa SMKN 1 Bangsri ingin belajar bahasa asing, tentu akan mempunyai nilai kemampuan bahasa asing seperti: TOEFL atau Noryoukusiken, untuk penguasaan Bahasa Inggris dan Bahasa Jepang. Hal inilah yang akan menjadi bahan pertimbangan yang sangat kuat saat melamar pekerjaan, Quipperian.') }}
                </p>
                <p class="text-secondary">
                    {{ __('Apabila Anda ingin mengenal voli lebih dekat atau bahkan menekuninya dengan serius, ada banyak hal yang harus diketahui terlebih dahulu. Anda sebaiknya memahami sejarah, teknik dasar, sekaligus peraturan permainan bola voli.') }}
                </p>
                <p class="text-secondary">
                    {{ __('Permainan Bola Voli merupakan olahraga yang menggunakan bola berbahan karet atau kulit dan dimainkan secara berkelompok oleh dua tim. Setiap tim terdiri dari 6 orang pemain yang area permainannya dipisahkan oleh net.') }}
                </p>
                <p class="text-secondary">
                    {{ __('Tujuan olahraga ini adalah memukul bola hingga melewati net sekaligus menjatuhkannya ke lantai lapangan di area lawan. Cara memukul bolanya pun tidak boleh sembarangan, karena ada teknik-teknik tertentu yang harus dikuasai para pemain.') }}
                </p>
                <p class="text-secondary">
                    {{ __('Permainannya sendiri dibagi menjadi 2–3 babak. Tim yang mendapatkan skor 25 terlebih dahulu akan dinyatakan sebagai pemenang di babak tersebut. Pemenang pertandingan adalah tim yang berhasil memenangkan dua babak.') }}
                </p>
            </div>
        </div>
    </section>
@endsection
