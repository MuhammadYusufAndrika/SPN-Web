@include ('partials.header')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="sass/style.scss" />
  <title>About SPN - Surya Prima Net</title>
  <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
</head>
<body>
  <!-- Carousel About -->
  <section class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($carousels as $carousel)
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="true" aria-label="Slide {{ $loop->index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner position-relative" style="width: 100%; height: 75vh;">
                @foreach ($carousels as $carousel)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $carousel->image) }}" class="d-block w-100"
                            alt="{{ $carousel->title }}">
                    </div>
                @endforeach
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
  <!-- End Carousel About -->

  <!-- Description Section -->
  <section id="deskripsi" style="padding-top: 50px; padding-bottom: 50px">
    <div class="container my-5">
      <div id="Home" class="row align-items-center">
        <div class="col-md-6">
          @foreach ($abouts as $about)
              <img src="{{ asset('storage/' . $about->image) }}" class="d-block w-100" alt="{{ $about->title }}">
          @endforeach
        </div>
        <div class="col-md-6" style="padding-left: 50px">
          <h2>
            <span class="text-primary">Tentang</span>
            <span class="text-danger">Surya Prima Net</span>
          </h2>
          <div>
            <p>
              Surya Prima Net adalah perusahaan ISP atau Penyedia Layanan Internet serta Technology Solution yang
              menjadikan kualitas dan layanan internet sebagai prioritas utama.
            </p>
            <p>
                Kami berkomitmen untuk menjadi Penyedia Layanan Internet terbaik dan dapat diandalkan untuk keperluan komunikasi data perusahaan Anda
                serta menjadi mitra terbaik untuk kemajuan perusahaan Anda.
              </p>
              <h2>
                <span class="text-primary">Visi & Misi</span>
                <span class="text-danger">Surya Prima Net </span>
              </h2>
              <p>
                Kami berkomitmen untuk menjadi Penyedia Layanan Internet terbaik dan dapat diandalkan untuk keperluan komunikasi data perusahaan Anda
                serta menjadi mitra terbaik untuk kemajuan perusahaan Anda.
              </p>
              <h2>
                <span class="text-primary">Komitmen</span>
                <span class="text-danger">Surya Prima Net </span>
              </h2>
              <p>
                Kami memiliki komitmen yang teguh untuk komunikasi yang terbuka, jujur, dan tepat waktu. Kejelasan dalam memahami tujuan kami dan apa
                yang kami harapkan dari satu sama lain adalah sangat penting untuk membuat keputusan terbaik serta memberikan layanan yang unggul.
              </p>
              <p>
                SPN berdedikasi untuk menjadi penyedia layanan internet terbaik dan aman, untuk mencapai ini kami merangkul tim-tim yang handal yang
                bisa mendorong tujuan kami khususnya untuk keberhasilan tujuan perusahaan.
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Description Section -->

  <!-- Footer -->
@include ('partials.footer')
 
  <!-- End Footer -->

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- Feather Icons JS -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- Custom JS -->
  <script>
    feather.replace();
  </script>
</body>
</html>

