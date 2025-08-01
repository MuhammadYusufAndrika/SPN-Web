<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte    </style>
</head>
<body>
  <section>
    @include('partials.header')
  </section>
    <title>Kontak | Surya Prima Net</title>
    <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            padding-top: 70px;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-custom {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .header-section {
            background-color: #0d6efd;
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
            position: relative;
            margin-top: 0;
        }
        
        .header-section::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            width: 100%;
            height: 20px;
            background-color: white;
            clip-path: polygon(0 0, 100% 0, 50% 100%);
        }
        
        .map-container {
            height: 100%;
            min-height: 350px;
        }
        
        .contact-form {
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        
        .contact-info i {
            width: 25px;
            color: #0d6efd;
            margin-right: 10px;
        }
        
        @media (max-width: 768px) {
            .header-section {
                padding: 2rem 0;
            }
            body {
                padding-top: 80px;
            }
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
        }

        .contact-info i {
            color: #0d6efd;
            margin-right: 10px;
            width: 20px;
        }

        @media (max-width: 768px) {
            .header-section {
                padding: 30px 0;
            }
            body {
                padding-top: 80px;
            }
        }
    </style>
</head>
<body>
  @include('partials.header')

    <!-- Header Section -->
    <section class="header-section">
      <div class="container text-center">
        <h2 class="display-5 fw-bold">
          <span class="text-white">Kantor</span> 
          <span class="text-warning">Kami</span>
        </h2>
      </div>
    </section>
  
    <!-- Main Content Section -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Map Section -->
          <div class="col-lg-6">
            <div class="map-container mb-4 mb-lg-0">
              <div class="ratio ratio-4x3 rounded overflow-hidden shadow-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.4952580892519!2d116.66311432851101!3d-8.501221973099224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc393b29ac144d%3A0xb0622dfdcbe4238f!2sJSN%20-%20Kantor%20Layanan%20Labuhan%20Lombok!5e0!3m2!1sid!2sid!4v1715173013393!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          
          <!-- Contact Form Section -->
          <div class="col-lg-6">
            <div class="contact-form rounded">
              <h2 class="h4 mb-4 text-uppercase fw-bold border-bottom border-primary pb-2">Pengaduan Masalah</h2>
              <form action="{{ url('create-contact') }}" method="POST">
                @csrf
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="tel" name="no_hp" class="form-control" placeholder="No. HP" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <textarea name="deskripsi_keluhan" class="form-control" placeholder="Deskripsi Keluhan" rows="4" required></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                      <label class="form-check-label" for="invalidCheck2">
                        Saya dapat memastikan bahwa data di atas benar
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">
                      <i class="fas fa-paper-plane me-2"></i>Kirim
                    </button>
                  </div>
                </div>
              </form>
              
              <div class="mt-5">
                <h3 class="h5 fw-bold text-uppercase mb-3">Admin Kami</h3>
                <div class="contact-info">
                  <p class="mb-2"><i class="fas fa-phone"></i> 082144299555</p>
                  <p class="mb-2"><i class="fas fa-envelope"></i> <a href="mailto:azka@gmail.com" class="text-decoration-none">azka@gmail.com</a></p>
                  <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Jln. Raya Labuan Lombok</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section>
    @include('partials.footer')
  </section>
     
</body>
  <script type="text/javascript">
    // Live chat script
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6666c6ec981b6c56477b7f0a/1i00ni3l6';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      feather.replace();
      
      // Initialize AOS
      AOS.init();
      
      // Add active class to dropdown parent when child is active
      const dropdownItems = document.querySelectorAll('.dropdown-item');
      dropdownItems.forEach(item => {
        if (item.getAttribute('href') === window.location.pathname) {
          item.closest('.dropdown').querySelector('.dropdown-toggle').classList.add('active');
        }
      });
    });
  </script>
</html>