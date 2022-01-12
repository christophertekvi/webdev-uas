 <!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MakanYuk | {{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons"/>

    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/template.css" />
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="js/template.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" ></script>
  </head>

  <body style="background-color:floralwhite;">
    <!--topbar-->
    <div class="header-top">
      <div class="row">
        <div>
            <a href="/">
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

    @include('partials.navbar')

    {{-- <div class="topbar">
      <nav class="navbar navbar-custom navbar-expand-md bg-transparent justify-content-center">
        <a href="/" class="navbar-brand d-flex w-50 mr-auto"></a>
        <div  class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="/home-sign-in">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/menu-sign-in" >MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-sign-in">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faqs-sign-in">FAQS</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <a class="text-reset me-3" href="/cart">
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
                    <a style="text-align: left; color: black;" class="dropdown-item" href="/profile-signin">My Profile</a>
                  </li>
                  <li>
                    <a style="text-align: left; color: black;" class="dropdown-item" >Points : {{ session('poin') }}</a>
                  </li>
                  <li>
                    <a style="text-align: left; color: black;" class="dropdown-item" href="/">Sign Out</a>
                  </li>
                </ul>
            </ul>
        </div>
      </nav>
    </div> --}}



    <div class="banner">
      <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3500">
            <img src="image/banner/1.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="image/banner/3.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="image/banner/2.png" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- <div class="ourmoto">
            <h1>OUR MOTTO</h1>
         </div> -->
    <div class="moto">
      <h1 style="text-align: center; margin: 100px 100px 50px 100px; font-family: Outfit, sans-serif;">
        OUR MOTTO
      </h1>
      <div class="container2">
        <div class="Natural">
          <img style="margin-top: 7px"
            src="https://img.icons8.com/material/50/000000/natural-food.png"
          />
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top: 10px;">Natural</p>
          <p style="font-style: italic;">
            We use all natural ingredients from our supplier.
          </p>
        </div>
        <div class="Fresh">
          <img style="margin-top: 7px"
            src="https://img.icons8.com/material-outlined/50/000000/hot-breakfast.png"
          />
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top: 10px;" >Fresh</p>
          <p style="font-style: italic">
            Every meal is made by order therefore they are made fresh everyday.
          </p>
        </div>
        <div class="Price">
          <img style="margin-top: 7px" src="https://img.icons8.com/material/50/000000/low-price.png" />
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top: 10px;">Low Price</p>
          <p style="font-style: italic;">
            Delicious home-cooked meal with reasonable price.
          </p>
        </div>
      </div>
    </div>

    <!-- <script src="script.js"></script> -->

    <div class="bestseller">
      <h1 style="text-align: center; margin: 100px 100px 50px 100px; font-family: Outfit, sans-serif;">
        BESTSELLER
      </h1>
      <div class="container1">
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/ayambakar.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 37px;">Ayam Bakar</p>
          <p style="font-style: italic; ">
            Rp. 15.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/esteh.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 37px;">Es Teh</p>
          <p style="font-style: italic; ">
            Rp. 7.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/gurameasman.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 3px;">Gurame Asam</p>
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:2px; margin-bottom: 5px;">Manis</p>
          <p style="font-style: italic; ">
            Rp. 20.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/esjeruk.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 37px;">Es Jeruk</p>
          <p style="font-style: italic; ">
            Rp. 8.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/udanggrgtepung.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 3px;">Udang Goreng</p>
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:2px; margin-bottom: 5px;">Tepung</p>
          <p style="font-style: italic; ">
            Rp. 18.000
          </p>
        </div>

      </div>
      <div class="buttonmenu">
        <button><a href="/menu" style="color: black;">More menus  ➔</a></button>
      </div>
    </div>

    <div class="testi">
      <h1 style="text-align: center; margin: 100px 100px 50px 100px; font-family: Outfit, sans-serif;">
        WHAT THEY SAY
      </h1>
      <div class="container" style="justify-content: center">
        <div class="container" style="justify-content: center">
            <img src="image/testi1.png" style="height: 350px">
            <img src="image/testi2.png" style="height: 350px">
            <img src="image/testi3.png" style="height: 350px">
        </div>
    </div>

    <div class="footer">
      <!-- <div class="container3">
        <div class="footer-isi" style="padding-top: 30px">

          <div class="socialmedia">
            <button>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-instagram"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                />
              </svg>
            </button>
            <button>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-whatsapp"
                viewBox="0 0 16 16"
              >
                <path
                  d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                />
              </svg>
            </button>
          </div>
          <br />
          <div class="kritik">
            <a
              href="#"
              style="
                padding-top: 80px;
                font-family: 'Outfit', sans-serif;
                color: black;
              "
              >Send us your feedbacks!</a
            >
          </div>
          <br />
          <h1
            style="
              font-size: small;
              padding-bottom: 50px;
              color: black;
              font-family: 'Outfit', sans-serif;
            "
          >
          Copyright 2021 | MakanYuk
          </h1>
          <br /><br />
        </div> -->

        <button id="btnScrollTop" onclick="scrollToTop()">
          <i class="material-icons">keyboard_double_arrow_up</i>
        </button>
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
              <a href="/home-sign-in" class="text-reset">Home</a>
            </p>
            <p>
              <a href="/menu-sign-in" class="text-reset">Menu</a>
            </p>
            <p>
              <a href="/about-sign-in" class="text-reset">About Us</a>
            </p>
            <p>
              <a href="/faqs-sign-in" class="text-reset">FAQs</a>
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

