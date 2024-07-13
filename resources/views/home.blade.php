@extends('layouts.app')

@section('content')
<section id="beranda">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-3">
                    Mari Donasikan <br>
                    Sebagian Hartamu
                </h1>
                <p class="mb-4">
                    Bismillah mari berdonasi
                </p>
                <a href="{{ route('customer.index') }}" class="btn btn-warning btn-lg rounded-pill">Beramal</a>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <img src="{{ asset('public/image/image2vector (2).svg') }}" alt="hero" style="margin-left: 27%; max-height: 300px;" class="img-fluid d-block mx-auto">
            </div>
        </div>
    </div>
</section>


<section id="Tentang">
    <div class="container">
        <link rel="stylesheet" href="css/style.css">
        <div class="text-center" style="text-align: center;">
            <h3>KENAPA MENYIMPAN <br>DI KAMI?</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="fasilitas">
                    <div class="description">
                        <h5>AMAN DAN TERPERCYA</h5>
                        <p>Kami sangat memprioritaskan data-data pelanggan kami<br>
                            agar tidak terjadi kecurangan</p>
                    </div>
                    <div class="icon-des">
                        <img src="image/card-text.svg" alt="fasilitas">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="fasilitas active">
                    <div class="description icon-left">
                        <h5>Penyaluran dana jelas</h5>
                        <p>Kami menyalurkan kebutuhan kepada alasan yang jelas dan <br>
                            terpercaya, agar tidak terjadi kecurangan</p>
                    </div>
                    <div class="icon-des">
                        <img src="image/card-text.svg" alt="fasilitas">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="fasilitas">
                    <div class="description">
                        <h5>Penyaluran dana jelas</h5>
                        <p>Kami menyalurkan kebutuhan kepada alasan yang jelas dan <br>
                            terpercaya, agar tidak terjadi kecurangan</p>
                    </div>
                    <div class="icon-des">
                        <img src="image/card-text.svg" alt="fasilitas">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="fasilitas">
                    <div class="description icon-left">
                        <h5>Penyaluran dana jelas</h5>
                        <p>Kami menyalurkan kebutuhan kepada alasan yang jelas dan <br>
                            terpercaya, agar tidak terjadi kecurangan</p>
                    </div>
                    <div class="icon-des">
                        <img src="image/card-text.svg" alt="fasilitas">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('image/money-svgrepo-com.svg') }}" alt="" class="img-fluid mx-auto d-block">
        </div>
        <div class="col-md-6">
            <h3 class="font-weight-bold mb-3 mt-5">ALOKASI KEUANGAN</h3>
            <p class="deskripsi">
                Kami mengalokasikan keuangan yang didapat oleh DKM Masjid Abu-Bakar dengan cukup baik.
                Tercatat kami mengalokasikan kepada beberapa kegiatan seperti sumbangan pada anak yatim piatu,
                partisipasi Idul Adha, serta proyek pembangunan kubah masjid agar terlihat lebih elegan.
            </p>

            <p class="font-weight-bold mt-4">Media Sosial Kami</p>
            <ul class="social">
                <li>
                    <a href="tel:081220907680">
                        <img src="{{ asset('gambar-masjid/whatsapp_1384055 - Copy.png') }}" alt="whatsapp">
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/lpkia_official">
                        <img src="{{ asset('gambar-masjid/instagram_174855 - Copy.png') }}" alt="instagram">
                    </a>
                </li>
                <li>
                    <a href="https://lpkia.ac.id">
                        <img src="{{ asset('gambar-masjid/world-wide-web_841364.png') }}" alt="website">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <h3 class="text-center font-weight-bold">Kegiatan</h3>
    <p class="text-center mb-4">
        Beberapa kegiatan keagamaan yang telah kami laksanakan <br> dalam rangka beribadah bersama kepada Allah
    </p>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="gambar-masjid/mabit-akrab lpkia.jpg" alt="mabit lpkia">

                    <p class="text-center">
                        Kegiatan Mabit yang dilaksanakan bertujuan untuk menambah keakraban antar anggota,
                        dan agar terlaksananya ukhuwah islamiyah serta bersama-sama meningkatkan keimanan
                    </p>
                    <p class="font-weight-bold text-center mb-0">
                        DKM LPKIA
                    </p>
                    <span class="text-muted">Mabit</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="gambar-masjid/takjil-lpkia.jpg" alt="takil lpkia">

                    <p class="text-center">
                        Kegiatan berbagi takjil kepada sesama untuk menyenangkan hati orang yang sedang berpuasa
                        agar diberikan pahala oleh Allah semata-mata mencari ridhonya
                    </p>
                    <p class="font-weight-bold text-center mb-0">
                        DKM LPKIA
                    </p>
                    <span class="text-muted">Berbagi Takjil</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="gambar-masjid/qurban-lpkia.jpg" alt="mabit lpkia">

                    <p class="text-center">
                        Kegiatan Qurban DKM LPKIA dengan mengurbankan 2 ekor domba dilaksanakan
                        di daerah kampus LPKIA dengan bantuan panitia, alumni, pembina,
                    </p>
                    <p class="font-weight-bold text-center mb-0">
                        DKM LPKIA
                    </p>
                    <span class="text-muted">Qurban</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('image/logo.png') }}" alt="Logo Koperasi" class="img-fluid">
            </div>
            <div class="col-md-4">
                <h5 class="text-uppercase">LPKIA</h5>
                <p>Jl. Soekarno Hatta no. 456 Bandung 40266 , Jawa Barat</p>
                <p>Telepon: (022) 7564-283</p>
                <p>Email: sekretariat@lpkia.ac.id</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-uppercase">Follow Us</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="tel:081220907680">
                            <img src="{{ asset('image/wa.png') }}" alt="whatsapp">
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/lpkia_official">
                            <img src="{{ asset('image/instagram.svg') }}" alt="instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://lpkia.ac.id">
                            <img src="{{ asset('image/website.svg') }}" alt="website">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{-- <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
