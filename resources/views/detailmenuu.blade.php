<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MakanYuk | {{'Detail Menu'}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons"/>

    <link rel="stylesheet" href="css/detailmenu.css" />
    <link rel="stylesheet" href="css/template.css" />
    <script type="text/javascript" src="js/detail.js"></script>
    <script type="text/javascript" src="js/template.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" ></script>
  </head>

  <body style="background-color:floralwhite;">
    <!--topbar-->
    <div class="header-top">
      <div class="row">
        <div>
            <a href="/home-sign-in">
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
                    <a class="nav-link" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/menu" >MENU</a>
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
                    <a style="text-align: left; color: black;" class="dropdown-item" >Points : 1000</a>
                  </li>
                  <li>
                    <a style="text-align: left; color: black;" class="dropdown-item" href="/home">Sign Out</a>
                  </li>
                </ul>
            </ul>
        </div>
      </nav>
    </div>

    <h1 style="text-align: center; margin: 50px 100px 50px 100px; font-family: Outfit, sans-serif;">
        DETAIL
    </h1>


    <div class="container">
        <div class="row gx-4 gx-lg-5 align-items-center">

            <div class="col-md-6">
                <div class="gambarmenu">
                    <img class="mb-5 mb-md-0" src="data:image/png;base64,{{ chunk_split(base64_encode($m->FOTO_MENU)) }}" alt="...">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail">
                    <h1 style="font-size: 30px;" class="display-5 fw-bolder">{{$m -> NAMA_MENU}}</h1>
                    <div class="fs-5 mb-4">
                        <span>{{$m -> HARGA_MENU}}</span>
                    </div>
                    <p style="margin-bottom: 1px;" class="lead">
                        Description : <br>
                        <p>{{$m -> DESKRIPSI_MENU}}</p>
                    </p>
                    <div class="d-flex">
                        <p style="margin-right: 10px" class="lead">
                            Jumlah :
                        </p>
                        <input class="form-control text-center me-3" name="inputQuantity" type="number" value="1" min="1"  style="max-width: 6rem">

                    </div>
                    <button style="background-color: #e25f21; width: 180px; color: white; border: solid 1px #b2b2b2;" class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-plus-fill me-1"></i>
                        Add to cart
                    </button>
                </div>

            </div>
        </div>
    </div>

    <button id="btnScrollTop" onclick="scrollToTop()">
        <i class="material-icons">keyboard_double_arrow_up</i>
    </button>
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
