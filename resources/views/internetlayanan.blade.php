<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layanan Internet SPN - Surya Prima Net</title>
    <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
    <link rel="stylesheet" href="/sass/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <header>
      <div>
        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
              <img
                src="/assets/images/banner.jpg"
                alt="SPN"
                width="100"
                height="auto"
              />
            </a>
            <div
              class="offcanvas offcanvas-end"
              tabindex="-1"
              id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel"
            >
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SPN</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Layanan
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/payment.html">Internet</a></li>
                      <li>
                        <a class="dropdown-item" href="/jarkomlayanan.html">Jaringan Komputer</a>
                      </li>
                      <li><a class="dropdown-item" href="cctvlayanan.html">CCTV</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <a href="/profile.html" class="login"><i data-feather="user"></i></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </nav>
      </div>
    </header>
    

    <!-- carousel start -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/images/backregisterbaru.webp" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h1>Membawa Dunia Menjadi Lebih Dekat</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/images/carousel-1 (1).jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h1>Melindungi Data Anda dengan Keamanan Terbaik</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/images/carousel-3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h1>Jalankan Bisnis Dengan Internet Berkecepatan Tinggi</h1>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- carousel end -->

   
      <div class="container my-5">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-1">
            <!-- Order untuk mengatur urutan -->
            <div>
              <h3 style="color: orangered">Our Services</h3>
              <h2 class="text-primary">Internet Services Provider</h2>
              <p>
                Kami menyediakan akses jaringan ke Internet untuk individu maupun corporate dan layanan terkait lainnya
                seperti akses VPN, membangun situs web dan virtual hosting. Dengan dukungan IP Public, IP Static, IP
                Private, Free Trial
                7 hari, SLA 98% dan Support 7x24 jam.
              </p>
            </div>
            <div>
              <h2 class="text-primary">Server Data Center</h2>
              <p>
                Fasilitas yang digunakan untuk menempatkan sistem komputer dan komponen-komponen terkaitnya, seperti
                sistem telekomunikasi dan penyimpanan data. Fasilitas ini biasanya mencakup juga catu daya redundan atau
                cadangan, koneksi
                komunikasi data redundan, pengontrol serta piranti keamanan fisik
              </p>
            </div>
            <div>
              <h2 class="text-primary">Network Configuration</h2>
              <p>
                Menggunakan bandwidth seluruhnya dari JSN dan sudah terintergrasi dengan beberapa Server antara Lain
                seperti GGC, FB group, cdn akamai lokal, CDN Netflix lokal, game ML, Garena, Microsoft, Amazon, Cloudflare
                dan akan terus
                bertambah kedepannya
              </p>
            </div>
          </div>
          <div class="col-md-5 order-md-2" data-aos="zoom-in" data-aos-duration="1000">
            <!-- Menggunakan order untuk posisi gambar -->
            <img src="assets/images/Our.jpg" alt="About Me" class="img-fluid" />
          </div>
        </div>
      </div>
    <!-- Penutup Our Services -->

    <!-- pilih paket -->
    <div class="pilih-paket">
      <h5>PAKET INTERNET PILIHAN</h5>
      <h1>Pilih Paketmu</h1>
    </div>

    <!-- Product list Start -->
    <section id="home">
      <div class="kartu">
        <div class="card" style="width: 18rem; height: 575px;"  data-aos="zoom-in">
          <img
            class="card-img-top"
            src="/assets/images/hijau.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Internet Fiber</h5>
            <h5>10mbps</h5>
            <h1 class="card-text">Rp200rb/ bulan</h1>
            <p class="card-info">*belum termasuk Ppn 11%</p>
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              Beli Paket
            </button>
          </div>
        </div>
        
        <div class="card" style="width: 18rem" data-aos="zoom-in">
          <img
            class="card-img-top"
            src="/assets/images/biru.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Internet Fiber+TV</h5>
            <h5>25mbps</h5>
            <h1 class="card-text">Rp500rb/ bulan</h1>
            <p class="card-info">*belum termasuk Ppn 11%</p>
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              Beli Paket
          </button>
          </div>
        </div>
        <div class="card" style="width: 18rem; height: 575px;" data-aos="zoom-in">
          <img
            class="card-img-top"
            src="/assets/images/emas.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Smart Home</h5>
            <h5>100mbps</h5>
            <h1 class="card-text">Rp1jt/ bulan</h1>
            <p class="card-info">*belum termasuk Ppn 11%</p>
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              Beli Paket
          </div>
        </div>
        <div class="card" style="width: 18rem; height: 575px;" data-aos="zoom-in">
          <img
            class="card-img-top"
            src="/assets/images/merah.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Internet Business</h5>
            <h5>30mbps</h5>
            <h1 class="card-text">Rp1,5jt/ bulan</h1>
            <p class="card-info">*belum termasuk Ppn 11%</p>
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              Beli Paket
          </div>
        </div>
      </div>
    
      <div class="qna" style="margin: 50px;"><h5>Internet Plan FAQ</h5></div>
       <!-- accordion start -->
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <strong>Why do i need a internet plan ?</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequuntur perferendis omnis! Libero, voluptate aspernatur pariatur itaque cum accusamus unde laboriosam quidem excepturi dolorum molestiae aperiam dicta! Soluta, id? Dignissimos!
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong>Can i upgrade my plan later ?</strong>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores praesentium, at veniam dolores dolor nihil eligendi hic delectus modi? Unde tempora pariatur placeat temporibus laborum in doloremque deserunt quibusdam hic.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <strong>Can I migrate to SPN ?</strong>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere possimus incidunt excepturi culpa dicta soluta illo, id explicabo nihil. Ipsam vero facilis velit impedit repellat eum hic non explicabo itaque.
          </div>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2024 Copyright:
      <a class="text-dark" href="#">SPN - Surya Prima Net</a>
    </div>
    <!-- accordion -->
    </section>
    <!-- Product List End -->

<!-- Button trigger modal -->
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Pilih Pembayaran</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Isi modal di sini -->
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

 
 
   

    <footer>
      
    </footer>
    <script src="/assets/script/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
  <script> feather.replace();</script>
</body>
</html>
