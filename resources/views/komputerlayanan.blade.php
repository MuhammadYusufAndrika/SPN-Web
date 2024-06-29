@include('partials.header')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Layanan Jaringan Komputer SPN - Surya Prima Net</title>
    <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
  </head>

  <body>
    <!-- Navbar sementara -->

    <!-- End Navbar -->

    <!-- Corrousel Jarkom -->
    <section>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner position-relative" style="width: 100%; height: 75vh">
          <div class="carousel-item active">
            <img src="assets/images/carousel-1 (1).jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block " style="height: 60%;">
              <h1 style="font-weight: 700;">Membawa Dunia Menjadi Lebih Dekat</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/carousel-2.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block " style="height: 60%;">
              <h1 style="font-weight: 700;">Membawa Dunia Menjadi Lebih Dekat</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/carousel-3.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block " style="height: 60%;">
              <h1 style="font-weight: 700;">Membawa Dunia Menjadi Lebih Dekat</h1>
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
    <!-- End Corrousel Jarkom -->

    <!-- Komputer Teks -->
    <section>
      <div class="container my-5">
          <div class="row align-items-center">
              @foreach ($sections as $section)
                  @if ($section->type == 'komputer-text')
                      <div class="col-md-6 order-md-1">
                          <h2 class="text-primary">{{ $section->title }}</h2>
                          <p>{{ $section->description }}</p>
                      </div>
                      <div class="col-md-5 order-md-2" data-aos="zoom-in" data-aos-duration="2000">
                          <img src="{{ asset('storage/' . $section->image) }}" alt="About Me" class="img-fluid" />
                      </div>
                  @endif
              @endforeach
          </div>
      </div>
  </section>
    <!-- End Komputer Teks -->

    <!-- Card  -->
    <section>
      <div class="pilih-paket text-center my-5">
          <h5>PAKET CCTV PILIHAN</h5>
          <h1>Pilih Paketmu</h1>
      </div>
      <section id="home">
          <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="800">
              @foreach ($sections as $section)
                  @if ($section->type == 'komputer-package')
                      <div class="card m-3" style="width: 18rem;">
                          <img class="card-img-top" src="{{ asset('storage/' . $section->image) }}"
                              alt="Card image cap" />
                          <div class="card-body">
                              <h5 class="card-title">{{ $section->title }}</h5>
                              <p class="card-text">{{ $section->description }}</p>
                              <p class="card-text">{{ $section->price }}</p>
                              <button type="button" class="btn btn-primary">Beli Paket</button>
                          </div>
                      </div>
                  @endif
              @endforeach
          </div>
      </section>
  </section>
    <!-- End Card -->

    <!-- Footer -->
    <section>
        @include ('partials.footer')
    </section>
    <!-- accordion -->
    <!-- Footer -->

    <script src="assets/script/index.js"></script>
  </body>
  <script>
    feather.replace();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
