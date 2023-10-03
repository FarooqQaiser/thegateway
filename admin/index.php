<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>AdminLogin</title>
  </head>

  <body>
    <section
      class="vh-100"
      style="
        background-image: url(assets/img/geometric-photography-DGKm-IIq8lU-unsplash.jpg);
      "
    >
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem">
              <div class="row g-0">
                <!-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="assets/img/geometric-photography-ufuPTJXwifY-unsplash.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div> -->
                <div class="col-md-12 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form action="process_login.php" method="POST">
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                        <img
                          style="height: 70px"
                          src="assets/img/GSL-PAK.png"
                          alt=""
                        />
                        <span class="h1 fw-bold mb-0">Admin Login</span>
                      </div>

                      <h5
                        class="fw-normal mb-3 pb-3"
                        style="letter-spacing: 1px"
                      >
                        Sign into your account
                      </h5>

                      <div class="form-outline mb-4">
                        <input
                          type="username"
                          id="username"
                          class="form-control form-control-lg"
                          name = "username"
                        />
                        <label class="form-label" for="username"
                          >username</label
                        >
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="password"
                          id="password"
                          class="form-control form-control-lg"
                          name = "password"
                        />
                        <label class="form-label" for="password"
                          >Password</label
                        >
                      </div>

                      <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">
                            Login
                      </button>

                        
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
