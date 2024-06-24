<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="sass/style.scss" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Layanan CCTV SPN - Surya Prima Net</title>
    <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
  </head>

  <body>
    <!-- Navbar sementara -->
    <section>
      <nav class="navbar navbar-expand-lg navbar-floating fixed-top bg-white mb-2 mt-3" style="border-radius: 16px 16px 16px 16px; height: 55px; margin: 20px; padding: 20px">
        <div class="container-fluid">
          <a class="navbar-brand me-auto" href="#">
            <img src="/assets/images/banner.jpg" alt="SPN" width="100" height="auto" />
          </a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SPN</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/Index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Layanan </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/payment.html">Internet</a></li>
                    <li>
                      <a class="dropdown-item" href="/jarkomlayanan.html">Jaringan Komputer</a>
                    </li>
                    <li><a class="dropdown-item" href="/cctvlayanan.html">CCTV</a></li>
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
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </section>
    <!-- End Navbar -->

    <!-- Corrousel CCTV -->
    <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner position-relative" style="width: 100%; height: 75vh">
          <div class="carousel-item active">
            <img src="assets/images/carousel-1 (1).jpg" class="d-block w-100" alt="Slide 1" />
            <div class="position-absolute" style="top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; padding: 5px">
              <h1 class="text-light mb-3">
                <span class="">Layanan Internet</span>
                <span class="">Surya Prima Net</span>
              </h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/carousel-2.jpg" class="d-block w-100" alt="Slide 2" />
            <div class="position-absolute" style="top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; padding: 4px">
              <h1 class="text-light mb-3">
                <span class="">Internet Cepat</span>
                <span class="">Harga Terjangkau</span>
              </h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/carousel-3.jpg" class="d-block w-100" alt="Slide 3" />
            <div class="position-absolute" style="top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; padding: 4px">
              <h1 class="text-light mb-3">
                <span class="">Solusi Internet</span>
                <span class="">Untuk Anda</span>
              </h1>
            </div>
          </div>
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
    <!-- End Corrousel CCTV -->

    <!-- CCTV Teks -->
    <section>
      <div class="container my-5">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-1">
            <!-- Order untuk mengatur urutan -->
            <div>
              <h2 class="text-primary">Layanan CCTV</h2>
              <p>
                Bisnis saat ini menghadapi tantangan yang semakin meningkat dalam pengadaan dan pengelolaan infrastruktur Closed-Circuit Television (CCTV) mereka. Meskipun banyak bisnis telah beralih ke solusi CCTV berbasis cloud untuk
                memberikan nilai tambah, namun masih ada kebutuhan yang kuat untuk infrastruktur khusus dalam menyediakan layanan CCTV. Layanan CCTV khusus, seperti JSN CCTV, menawarkan solusi yang memungkinkan sebuah bisnis untuk
                mempertahankan kebijakan keamanan dan privasi yang ketat, serta untuk menjaga kontrol penuh atas lingkungan CCTV mereka sendiri.
              </p>
            </div>
          </div>
          <div class="col-md-5 order-md-2" data-aos="zoom-in" data-aos-duration="2000">
            <!-- Menggunakan order untuk posisi gambar -->
            <img src="assets/images/Our.jpg" alt="About Me" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- End CCTV Teks -->

    <!-- Card  -->
    <section>
      <!-- pilih paket -->
      <div class="pilih-paket text-center my-5">
        <h5>PAKET INTERNET PILIHAN</h5>
        <h1>Pilih Paketmu</h1>
      </div>

      <!-- Product list Start -->
      <section id="home">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="800">
          <!-- Card 1 -->
          <div
            class="card m-3"
            style="width: 18rem; transition: transform 0.3s, box-shadow 0.3s"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='5px 5px 10px #727272';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';"
          >
            <img class="card-img-top" src="assets/images/cctv.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">CCTV 1</h5>
              <h5>2Mega</h5>
              <h1 class="card-text">Rp200rb/ bulan</h1>
              <p class="card-info">*belum termasuk Ppn 11%</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Beli Paket</button>
            </div>
          </div>
          <!-- Card 2 -->
          <div
            class="card m-3"
            style="width: 18rem; transition: transform 0.3s, box-shadow 0.3s"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='5px 5px 10px #727272';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';"
          >
            <img class="card-img-top" src="assets/images/cctv.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">CCTV 2</h5>
              <h5>25Mega</h5>
              <h1 class="card-text">Rp500rb/ bulan</h1>
              <p class="card-info">*belum termasuk Ppn 11%</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Beli Paket</button>
            </div>
          </div>
          <!-- Card 3 -->
          <div
            class="card m-3"
            style="width: 18rem; transition: transform 0.3s, box-shadow 0.3s"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='5px 5px 10px #727272';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';"
          >
            <img class="card-img-top" src="assets/images/cctv.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">CCTV 3</h5>
              <h5>30Mega</h5>
              <h1 class="card-text">Rp1,5jt/ bulan</h1>
              <p class="card-info">*belum termasuk Ppn 11%</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Beli Paket</button>
            </div>
          </div>
          <!-- Card 4 -->
          <div
            class="card m-3"
            style="width: 18rem; transition: transform 0.3s, box-shadow 0.3s"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='5px 5px 10px #727272';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';"
          >
            <img class="card-img-top" src="assets/images/cctv.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">CCTV 4</h5>
              <h5>40Mega</h5>
              <h1 class="card-text">Rp1,5jt/ bulan</h1>
              <p class="card-info">*belum termasuk Ppn 11%</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Beli Paket</button>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- End Card -->

    <!-- Footer -->
    <section>
      <div class="qna" style="text-align: center; margin: 50px"><h5>Internet Plan FAQ</h5></div>
      <!-- accordion start -->
      <div class="accordion" style="margin-left: 270px; margin-right: 270px; margin-bottom: 50px" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <strong>Why do i need a internet plan ?</strong>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequuntur perferendis omnis! Libero, voluptate aspernatur pariatur itaque cum accusamus unde laboriosam quidem excepturi dolorum molestiae aperiam dicta!
              Soluta, id? Dignissimos!
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
    </section>
    <!-- End Footer -->

    <script src="assets/script/index.js"></script>
  </body>
  <script>
    feather.replace();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>