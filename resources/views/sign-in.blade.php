<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="/your-path-to-fontawesome/css/fontawesome.css"
      rel="stylesheet"
    />
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet" />
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/Sign-In.css" />
    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
    ></script>
    <title>MakanYuk | Sign In</title>
  </head>
  <body style="background-color:floralwhite;">
    <div class="header-top">
      <div class="row">
        <div>
            <a href="/home">
            <img
              class="logo"
              src="image/logo.png"
              style="height: 100%"
              alt="Logo"
            />
          </a>
        </div>
      </div>
    </div>

    @include('partials.navbar-sign-in')

    <div style="margin-top: 75px">
      <div class="masuk">
        <h1>Sign In</h1>
      </div>
    </div>
    <div class="container">
      <div class="containercontroller">
        <div class="email">
          <h2 style="font-size: large;">E-mail :</h2>
          <input type="text" />
        </div>
        <div class="password">
          <h2 style="font-size: large;">Password :</h2>
          <input type="password" />
        </div>
      </div>
    </div>
    <div class="container2">
      <div class="buttonmasuk">
        <button>
          <a href="/home-sign-in" style="color: black">Sign In</a>
        </button>
      </div>
    </div>
    <div class="ke-signup">
      <a
        href="/sign-up"
        style="
          font-family: 'Outfit', sans-serif;
          color: black;
          font-size: smaller;
        "
        >Don't have an account?</a
      >
    </div>
  </body>

    <!-- Footer -->
    <footer style="background-color: #f88753;" class="text-center text-lg-start text-muted">
      <!-- Section: Links  -->
      <section style="color: white; padding-top: 0.1%;" class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <img style="width: 90%; height: 38%;"src="image/logo.png">
              <p>
                MakanYuk provides an online catering service. We have various menus and are all scheduled.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div style="padding-left: 5%;" class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 style="text-decoration: underline; text-underline-offset: 50%;" class="text-uppercase fw-bold mb-4">
                Menu
              </h6>
              <p>
                <a href="#!" class="text-reset">Foods</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Drinks</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Bestseller</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 style="text-decoration: underline; text-underline-offset: 50%;" class="text-uppercase fw-bold mb-4">
                Quick Links
              </h6>
              <p>
                <a href="#!" class="text-reset">Home</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Menu</a>
              </p>
              <p>
                <a href="#!" class="text-reset">About Us</a>
              </p>
              <p>
                <a href="#!" class="text-reset">FAQs</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 style="text-decoration: underline; text-underline-offset: 50%;" class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fas fa-envelope me-3"></i> makanyuk@gmail.com</p>
              <p><i class="fab fa-instagram me-3"></i></i> @makanyuk.catering</p>
              <p><i class="fab fa-whatsapp me-3"></i></i> +62 812 3456 7891</p>
              <p>Send us your feedbacks!</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="color: white; background-color: #e25f21;">
        © 2021 Copyright |
        <a class="text-reset fw-bold">MakanYuk</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
</html>
