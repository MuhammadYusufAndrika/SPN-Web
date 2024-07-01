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
        <a class="list" href="#resetpasswordview">Password</a>
      </div>
      <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn button-logout" role="button">Logout</button>
  </form>
</div>
<!-- sidebar end -->


        <!-- content page -->
        <div class="content-profile">
          <div class="section-page">
            <div class="container-page-fluid">
              <div class="heading-content-profile">
                <p style="display: flex; font-weight: 700">profile Menu</p>
              </div>
              <div class="content-profile-form">
                <form class="row g-3">
                  <div class="col-md-4">
                    <label for="validationServer01" class="form-label"
                      >First name</label
                      
                    >
                    <p></p>
                    <input
                      type="text"
                      class="form-control is-valid"
                      id="validationServer01"
                      value="Mark"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationServer02" class="form-label"
                      >Last name</label
                    >
                    <input
                      type="text"
                      class="form-control is-valid"
                      id="validationServer02"
                      value="Otto"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationServerUsername" class="form-label"
                      >Username</label
                    >
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend3"
                        >@</span
                      >
                      <input
                        type="text"
                        class="form-control is-invalid"
                        id="validationServerUsername"
                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                        required
                      />
                      <div
                        id="validationServerUsernameFeedback"
                        class="invalid-feedback"
                      >
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationServer03" class="form-label"
                      >City</label
                    >
                    <input
                      type="text"
                      class="form-control is-invalid"
                      id="validationServer03"
                      aria-describedby="validationServer03Feedback"
                      required
                    />
                    <div
                      id="validationServer03Feedback"
                      class="invalid-feedback"
                    >
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationServer04" class="form-label"
                      >State</label
                    >
                    <select
                      class="form-select is-invalid"
                      id="validationServer04"
                      aria-describedby="validationServer04Feedback"
                      required
                    >
                      <option selected disabled value="">Choose...</option>
                      <option>...</option>
                    </select>
                    <div
                      id="validationServer04Feedback"
                      class="invalid-feedback"
                    >
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationServer05" class="form-label"
                      >Zip</label
                    >
                    <input
                      type="text"
                      class="form-control is-invalid"
                      id="validationServer05"
                      aria-describedby="validationServer05Feedback"
                      required
                    />
                    <div
                      id="validationServer05Feedback"
                      class="invalid-feedback"
                    >
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input
                        class="form-check-input is-invalid"
                        type="checkbox"
                        value=""
                        id="invalidCheck3"
                        aria-describedby="invalidCheck3Feedback"
                        required
                      />
                      <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                      </label>
                      <div id="invalidCheck3Feedback" class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">
                      Submit
                    </button>
                  </div>
                </form>
              </div>
              <p
                class="resetpassword"
                style="display: flex; font-weight: 700; margin-top: 350px"
              >
                Reset Password
              </p>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label"
                  >Email</label
                >
                <div class="col-sm-10">
                  <input
                    type="text"
                    readonly
                    class="form-control-plaintext"
                    id="staticEmail"
                    value="email@example.com"
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Password</label
                >
                <div class="col-sm-10">
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword"
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >New Password</label
                >
                <div class="col-sm-10">
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword"
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Retype Password</label
                >
                <div class="col-sm-10">
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword"
                  />
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Send</button>
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
