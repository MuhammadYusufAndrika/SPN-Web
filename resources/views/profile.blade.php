@include("partials.header")
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile SPN - Surya Prima Net</title>
    <link rel="shortcut icon" href="/assets/images/SPN.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/sass/style.css" />
  </head>
  <body style="overflow: hidden; display: flex; justify-content: center; align-items: center;">
    <div class="user-profile">
      <div class="d-flex">
       <!-- sidebar menu -->
        <div class="sidebar-profile">
          <div class="heading-profile">
          <img src="/assets/images/About.jpg" alt="" />
        </div>
      <div class="menu-sidebar-profile">
        <a class="list" href="{{ url('/profile') }}">Profile</a>
        <form action="{{ route('logout') }}" method="POST">
          <button type="submit" class="btn button-logout" role="button">Logout</button>
      </div>
    @csrf
  </form>
</div>
<!-- sidebar end -->

        <!-- content page -->
        <div class="content-profile" style="padding: 20px;">
          <div class="container-page-fluid" style="max-width: 100%;">
              <div class="heading-content-profile">
                  <p class="fw-bold">Profile Menu</p>
              </div>
              <div class="content-profile-form" style=" border: 1px solid #ddd;padding: 20px;border-radius: 5px;">

                <form class="row g-3" method="POST" action="{{ url('/update-profil') }}">
                  @csrf
                  <div class="col-md-12">
                      <label for="name" class="form-label">Username</label>
                      <input type="text" class="form-control is-valid" id="name" name="name" value="{{ $user->name }}" required>
                  </div>
                  <div class="col-md-12">
                    <label for="validationServer01" class="form-label">Email</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" name="email" value="{{ $user->email }}" required>
                </div>
                  <div class="col-md-12">
                    <label for="validationServer01" class="form-label">Password</label>
                    <input type="text" class="form-control" id="validationServer01" name="password" required>
                </div>
                  <div class="col-md-12">
                      <label for="validationServer01" class="form-label">Confirm Password</label>
                      <input type="text" class="form-control" id="validationServer01" name="password" required>
                      <button class="btn btn-primary mt-1" type="submit">Reset</button>
                  </div>
                  <!-- Add other form fields here if needed -->

              </div>
          </div>
      </div>
        <!-- content end -->
      </div>
    </div>
    <script>
      document;
      document
        .querySelector('.list[href="#resetpasswordview"]')
        .addEventListener("click", function (e) {
          e.preventDefault();
          document
            .querySelector(".resetpassword")
            .scrollIntoView({ behavior: "smooth" });
        });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
