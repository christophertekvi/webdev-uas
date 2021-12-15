<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
    ></script>
    <link rel="stylesheet" href="css/Sign-Up.css" />
    <link rel="stylesheet" href="css/template.css" />

    <title>MakanYuk | Sign Up</title>
  </head>

  <body style="background-color:floralwhite;">
    <div class="header-top">
      <div class="row">
        <div>
          <!-- <a href="index.html"> -->
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

    <div class="topbar">
      <nav class="navbar navbar-custom navbar-expand-md bg-transparent justify-content-center">
        <a href="/" class="navbar-brand d-flex w-50 mr-auto"></a>
        <div  class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="./home.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./menu.html" >MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.html">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./faqs.html">FAQS</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <a class="text-reset me-3" href="#">
                  <i style="color: #ffffff;" class="fas fa-shopping-cart"></i>
                </a>
                <a
                  style="padding-right: 18%;"
                  class="dropdown-toggle d-flex align-items-center hidden-arrow"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                <i class="fas fa-user" style="color: #ffffff;"></i>
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <a style="text-align: left; color: black;" class="dropdown-item" href="./Sign-In.html">Sign In</a>
                  </li>
                  <li>
                    <a style="text-align: left; color: black;" class="dropdown-item" href="./Sign-Up.html">Sign Up</a>
                  </li>
                </ul>
            </ul>
        </div>
      </nav>
    </div>

    <div
      class="masuk"
      style="
        width: 300px;
        margin: auto;
        font-family: 'Outfit', sans-serif;
        font-size: large;
        margin-top: 50px;
        margin-bottom: 25px;
        text-align: center;
      "
    >
      <h1>Sign Up</h1>
    </div>
    <div class="container1">
      <div class="controlcontainer1">
        <div class="controlnamadepanbelakang">
          <div class="namadepan">
            <h1 style="font-size: medium;">First Name :</h1>
            <input type="text">
          </div>
          <div class="namabelakang">
            <h1 style="font-size: medium;">Last Name :</h1>
            <input type="text">
          </div>
        </div>
        <div class="datainputsignup">
          <h1 style="font-size: medium;">E-mail :</h1>
          <input type="text">
        </div>
        <div class="datainputsignup">
          <h1 style="font-size: medium;">Password :</h1>
          <input type="password">
        </div>
        <div class="datainputsignup">
          <h1 style="font-size: medium;">Re-enter Password :</h1>
          <input type="password">
        </div>
      </div>
      <div class="buttoncontrol">
        <button>
          <a href="/home-sign-in" style="color: black">Sign Up</a>
        </button>
      </div>

      <div class="ke-signin">
        <a
          href="/sign-in"
          style="
            font-family: 'Outfit', sans-serif;
            color: black;
            font-size: x-small;
          "
          >Already have an account?</a
        >
      </div>
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
