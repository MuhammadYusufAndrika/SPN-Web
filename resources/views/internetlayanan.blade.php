@include ('partials.header')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layanan Internet SPN - Surya Prima Net</title>
    <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
    {{-- <link rel="stylesheet" href="/sass/style.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://unpkg.com/feather-icons"></script>
  </head>


  <body>
    <!-- carousel start -->
    <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner position-relative" style="width: 100%; height: 75vh">
              <div class="carousel-item active">
                  <img src="assets/images/carousel-1 (1).jpg" class="d-block w-100" alt="Slide 1" />
                  <div class="position-absolute"
                      style="top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; padding: 5px">
                      <h1 class="text-light mb-3">
                          <span class="">Layanan Internet</span>
                          <span class="">Surya Prima Net</span>
                      </h1>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="assets/images/carousel-2.jpg" class="d-block w-100" alt="Slide 2" />
                  <div class="position-absolute"
                      style="top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; padding: 4px">
                      <h1 class="text-light mb-3">
                          <span class="">Internet Cepat</span>
                          <span class="">Harga Terjangkau</span>
                      </h1>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="assets/images/carousel-3.jpg" class="d-block w-100" alt="Slide 3" />
                  <div class="position-absolute"
                      style="top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; padding: 4px">
                      <h1 class="text-light mb-3">
                          <span class="">Solusi Internet</span>
                          <span class="">Untuk Anda</span>
                      </h1>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </section>
    <!-- carousel end -->

   {{-- Internet Teks --}}
    <section>
      <div class="container my-5">
          <div class="row align-items-center">
              @foreach ($sections as $section)
                  @if ($section->type == 'cctv-text')
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
    <!-- Internet End  -->

    {{-- Product List card --}}
    <section>
      <div class="pilih-paket text-center my-5">
          <h5>PAKET CCTV PILIHAN</h5>
          <h1>Pilih Paketmu</h1>
      </div>
      <section id="home">
          <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="800">
              @foreach ($sections as $section)
                  @if ($section->type == 'cctv-package')
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
    <!-- Product List End -->
  
    <!-- Footer -->
    <section>
      @include('partials.footer')
  </section>
  <!-- End Footer -->
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
