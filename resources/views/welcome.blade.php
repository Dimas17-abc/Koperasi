@extends('layouts.main')

@section('content')

    <section id="beranda">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3">
                        Mari Simpan Sebagian Hartamu <br>
                    </h1>
                    <p class="mb-4">
                        Mari Simpan di E-Coop
                    </p>
                    <a href="{{ route('customer.index') }}" class="btn btn-warning btn-lg rounded-pill">Beramal</a>
                </div>
                <div class="col-md-6 .d-none .d-sm-block">
                    <img src="{{ asset('image/image.png') }}"
                        class="img-fluid d-block mx-auto">
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
                            <h5>Keterjangkauan dan Kemudahan Akses</h5>
                            <p>Platform digital yang dapat diakses kapan saja dan di mana saja melalui perangkat elektronik,
                                memudahkan anggota untuk menggunakan layanan koperasi.
                            </p>
                        </div>
                        <div class="icon-des">
                            <img src="image/card-text.svg" alt="fasilitas">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fasilitas">
                        <div class="description">
                            <h5>Efisiensi Operasional</h5>
                            <p>Digitalisasi proses administrasi dan layanan koperasi mengurangi waktu dan biaya,
                                meningkatkan efisiensi operasional.</p>
                        </div>
                        <div class="icon-des">
                            <img src="image/card-text.svg" alt="fasilitas">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fasilitas">
                        <div class="description icon-left">
                            <h5>Peningkatan Pelayanan Anggota</h5>
                            <p>Menawarkan fitur dan layanan yang disesuaikan dengan kebutuhan anggota, seperti konsultasi
                                keuangan online dan pelatihan daring, meningkatkan kepuasan anggota.</p>
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
                <img src="{{ asset('image/uang.jpg') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-md-6">
                <h3 class="font-weight-bold mb-3 mt-5">ALOKASI KEUANGAN</h3>
                <p class="deskripsi">
                    Kami mengalokasikan keuangan yang didapat oleh e-coop dengan cukup baik. Tercatat, kami mengalokasikan
                    dana kepada beberapa kegiatan seperti bantuan kepada anggota yang membutuhkan, partisipasi dalam
                    kegiatan sosial, serta proyek peningkatan infrastruktur digital agar layanan koperasi menjadi lebih
                    efisien dan modern.
                </p>

                <p class="font-weight-bold mt-4">Media Sosial Kami</p>
                <ul class="social">
                    <li>
                        <a href="tel:081220907680">
                            <img src="{{ asset('image/whatsapp (1).svg') }}" alt="whatsapp">
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/lpkia_official">
                            <img src="{{ asset('image/instagram.svg') }}" alt="instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://lpkia.ac.id">
                            <img src="{{ asset('image/globe-solid.svg') }}" alt="website">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="text-center font-weight-bold">Kegiatan Koperasi</h3>
        <p class="text-center mb-4">
            Beberapa kegiatan koperasi yang telah kami laksanakan <br> dalam rangka meningkatkan kesejahteraan anggota koperasi
        </p>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/" alt="Pelatihan Usaha">

                        <p class="text-center">
                            Kegiatan pelatihan usaha yang dilaksanakan bertujuan untuk meningkatkan keterampilan dan pengetahuan anggota koperasi dalam menjalankan usaha mereka.
                        </p>
                        <p class="font-weight-bold text-center mb-0">
                            Koperasi LPKIA
                        </p>
                        <span class="text-muted">Pelatihan Usaha</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/" alt="Bazar Koperasi">

                        <p class="text-center">
                            Kegiatan bazar koperasi untuk mempromosikan produk-produk anggota koperasi dan meningkatkan penjualan serta jaringan pemasaran.
                        </p>
                        <p class="font-weight-bold text-center mb-0">
                            Koperasi LPKIA
                        </p>
                        <span class="text-muted">Bazar Koperasi</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="image/" alt="Pembiayaan Usaha">

                        <p class="text-center">
                            Kegiatan pembiayaan usaha koperasi untuk membantu anggota koperasi mendapatkan modal usaha dengan bunga ringan dan proses yang mudah.
                        </p>
                        <p class="font-weight-bold text-center mb-0">
                            Koperasi LPKIA
                        </p>
                        <span class="text-muted">Pembiayaan Usaha</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                <img src="{{ asset('image/whatsapp (1).svg') }}" alt="whatsapp" height="10px" width="20px">
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/lpkia_official">
                                <img src="{{ asset('image/instagram.svg') }}" alt="instagram">
                            </a>
                        </li>
                        <li>
                            <a href="https://lpkia.ac.id">
                                <img src="{{ asset('image/logo.png') }}" alt="website">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
