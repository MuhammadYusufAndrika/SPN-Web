@include ('partials.header')
@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <!-- Banner -->
    <!-- Corrousel About -->
    
@section('content')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($carousels as $carousel)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $loop->index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner position-relative" style="width: 100%; height: 75vh;">
                @foreach ($carousels as $carousel)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $carousel->image) }}" class="d-block w-100" alt="{{ $carousel->title }}">
                        <div class="position-absolute" style="top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; padding: 5px;">
                            <h1 class="text-light mb-3">
                                <span class="text-primary">{{ $carousel->title }}</span>
                                <span class="text-danger">{{ $carousel->subtitle }}</span>
                            </h1>
                            <a href="#" class="cta btn btn-primary mt-3">Ayo Berlangganan</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection

    <!-- End Corrousel About -->
    <!-- End Banner -->

    <!-- What is Jsn -->
    <section id="description">
        <div class="container my-5">
            <div id="Home" class="row align-items-center">
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="assets/images/deskripsi.jpg" alt="About Me" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h2>
                        <span class="text-danger">{{ $firstDescription?->title }}</span>
                    </h2>
                    <p>
                        {{ $firstDescription?->content }}
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- What is Jsn -->

    <!-- Kenapa Harus Memilih JSN -->
    <section id="Previllage">
        <div class="container">
            <!-- Bagian Judul -->
            <div class="row justify-content-center text-center my-5">
                <!-- Memastikan judul di tengah -->
                <div class="col-md-8">
                    <!-- Memberi batasan lebar -->
                    <h3 class="text-primary">Why Choose Us?</h3>
                    <h2 class="text-danger">Kenapa Harus Memilih SPN</h2>
                </div>
            </div>

            <!-- Grup Kartu -->
            <div class="container">
                <div class="row justify-content-center g-0">
                    <div class="col" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card h-100" style="background-color: #e55c25; border: 0">
                            <div class="card-body">
                                <h5 class="card-title text-light">Harga Bersaing</h5>
                                <p class="card-text text-light">
                                    Jaringanku menawarkan paket internet dan video streaming dengan biaya paling
                                    kompetitif dibandingkan
                                    para pesaing kami. Dapatkan kecepatan serta koneksi yang lebih stabil dan kuota
                                    tanpa batas dengan
                                    harga yang lebih hemat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
                        <div class="card h-100" style="background-color: whitesmoke; border: 0">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #e55c25">Layanan Terpercaya</h5>
                                <p class="card-text">
                                    Kami menerapkan kebijakan untuk tidak memberlakukan pembatasan Kuota atau Paket data
                                    untuk semua paket
                                    Unlimited. Kamu bisa streaming ataupun download semua konten favoritmu tanpa
                                    khawatir akan penurunan
                                    kecepatan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="">
                        <div class="card h-100" style="background-color: #e55c25; border: 0">
                            <div class="card-body">
                                <h5 class="card-title text-light">Jaminan Keamanan</h5>
                                <p class="card-text text-light">
                                    Dengan rasio download dan upload terbaik, Jaringanku menjawab semua kebutuhan akses
                                    internet kamu
                                    dengan beragam pilihan paket personal, paket keluarga maupun paket bisnis yang
                                    terjamin aman dari
                                    konten-konten negatif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Penutup Kenapa Harus Memilih JSN  -->

    <!-- Our Services -->
    <section id="OurServices">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-7 order-md-1">
                    <!-- Order untuk mengatur urutan -->
                    <div>
                        <h3 style="color: #e55c25">Our Services</h3>
                        <h2 class="text-primary">Internet Services Provider</h2>
                        <p>
                            Kami menyediakan akses jaringan ke Internet untuk individu maupun corporate dan layanan
                            terkait lainnya
                            seperti akses VPN, membangun situs web dan virtual hosting. Dengan dukungan IP Public, IP
                            Static, IP
                            Private, Free Trial
                            7 hari, SLA 98% dan Support 7x24 jam.
                        </p>
                    </div>
                    <div>
                        <h2 class="text-primary">Server Data Center</h2>
                        <p>
                            Fasilitas yang digunakan untuk menempatkan sistem komputer dan komponen-komponen terkaitnya,
                            seperti
                            sistem telekomunikasi dan penyimpanan data. Fasilitas ini biasanya mencakup juga catu daya
                            redundan atau
                            cadangan, koneksi
                            komunikasi data redundan, pengontrol serta piranti keamanan fisik
                        </p>
                    </div>
                    <div>
                        <h2 class="text-primary">Network Configuration</h2>
                        <p>
                            Menggunakan bandwidth seluruhnya dari JSN dan sudah terintergrasi dengan beberapa Server
                            antara Lain
                            seperti GGC, FB group, cdn akamai lokal, CDN Netflix lokal, game ML, Garena, Microsoft,
                            Amazon, Cloudflare
                            dan akan terus
                            bertambah kedepannya
                        </p>
                    </div>
                </div>
                <div class="col-md-5 order-md-2 " data-aos="zoom-in" data-aos-duration="2000">
                    <!-- Menggunakan order untuk posisi gambar -->
                    <img src="assets/images/Our.jpg" alt="About Me" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- Penutup Our Services -->

    <!-- API Speedtest Online -->
    <section id="speed-test">
        <div class="container my-5 " data-aos="fade-up" data-aos-duration="2000">
            <h2 class="text-center">
                <span class="text-primary">Test</span>
                <span class="text-danger">Kecepatan Internet</span>
            </h2>
            <div class="position-relative mt-5" style="padding-bottom: 56.25%; overflow: hidden; ">
                <iframe class="position-absolute top-0 start-0 w-100 h-100 border-0"
                    src="//openspeedtest.com/speedtest" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Penutup -->
    @include ('partials.footer')
    <!-- Footer -->
</body>

</html>
