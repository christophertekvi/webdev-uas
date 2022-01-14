<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makan Yuk</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons"/>

    <link rel="stylesheet" href="/css/template.css" />
    <link rel="stylesheet" href="/css/detail-pesanan.css">
    <script type="text/javascript" src="/js/template.js"></script>

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" ></script>
</head>
<header>
</header>
<body style="background-color:floralwhite;">
    <div class="header-top">
        <div class="row">
          <div>
            <a href="/home">
              <img
                class="logo"
                src="/image/logo.png"
                style="height: 100%"
                alt="Logo"
              />
            </a>
          </div>
        </div>
    </div>

    {{-- @include('partials.navbar-sign-in') --}}
    <div class="topbar">
        <nav
          class="
            navbar navbar-custom navbar-expand-md
            bg-transparent
            justify-content-center
          "
        >
          <a href="/" class="navbar-brand d-flex w-50 mr-auto"></a>
          <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/home-sign-in"
                  >HOME</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/menu-sign-in">MENU</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about-sign-in">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/faqs-sign-in">FAQS</a>
              </li>
            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
              <a href="/cart" style="padding-right: 5%; backgroud-color: transparent; color: white; border: solid 1px #e25f21; font-family: 'Outfit', sans-serif; font-size: smallerS; border-radius: 4px;">
                  <i class="fas fa-shopping-cart"></i>
                  <span class="badge bg-dark text-white ms-1 rounded-pill">
                      {{ \App\Models\Cart::getCount() }}
                  </span>
              </a>
              {{-- <a class="text-reset me-3" href="/cart">
                <i style="color: #ffffff" class="fas fa-shopping-cart"></i>
              </a> --}}
              <a
                style="padding-right: 18%"
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-user" style="color: #ffffff"></i>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a style="text-align: left; color: black;" class="dropdown-item" href="/profile-signin">My Profile</a>
                </li>
                <li>
                  <a style="text-align: left; color: black;" class="dropdown-item" href="#">Points : {{ session('poin') }}</a>
                </li>
                <li>
                  <a style="text-align: left; color: black;" class="dropdown-item" href="/">Sign Out</a>
                </li>
              </ul>
            </ul>
          </div>
        </nav>
    </div>

    <div class="container1">
        <p style="font-family: 'Outfit', sans-serif; font-size: 220%; margin-top: 30px;">Order Details</p>
    </div>
    <div class="container2" style="margin-top: 30px;">
        <div class="controlcontainer2">
            <div class="bagian1">
                <div class="tanggalpesanan" style="border-radius: 10px;">
                    <p>Delivery Date : {{$dataorders->TANGGAL_KIRIM}}</p>
                </div>
                <div class="nopesanan" style="border-radius: 10px;">
                    <p>Order ID : {{$dataorders->ID_TB}}</p>
                </div>
            </div>
            <div class="bagian2" style="margin-top: 30px;">
                <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Address :</h1>
                <textarea disabled name="alamat" id="alamatuser" cols="30" rows="3" style="border-radius: 10px;">{{$dataorders->ALAMAT}}</textarea>
            </div>
            <div class="bagian3" style="margin-top: 30px;">
                <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Orders :</h1>
                @foreach ($detail as $dm)
                <div class="pesanan" style="border-radius: 10px;">
                    <div class="fotomenu">
                        <div class="gambar">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($dm->FOTO_MENU)) }}" alt="" style="width: 100%; height: 100%;">
                        </div>
                    </div>
                    <div class="detailmenu">
                        <div class="detailmenu1">
                            <h1>{{$dm->NAMA_MENU}}</h1>
                            <h3>{{$dm->HARGA_MENU}}</h3>
                        </div>
                        <div class="detailmenu2">
                            <h3>Qty : {{ $dm->QUANTITY_BELI }}</h2>
                        </div>
                    </div>
                    <div class="subtotal">
                        <div class="emptysubtotal">

                        </div>
                        <div class="subtotaltext">
                            <h3>Subtotal : Rp. {{$dm->SUBTOTAL}},-</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="bagian4" style="margin-top: 30px;">
                <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Notes :</h1>
                <div class="pesaninput">
                    <textarea name="pesanpelanggan" id="textpesan" cols="30" rows="3" style="border-radius: 10px;"></textarea>
                </div>
            </div>
            <div class="bagian5" style="margin-top: 30px; border-radius: 10px;">
                <div class="empty"></div>
                <div class="bagian5text1">
                    <h3>Subtotal :</h3>
                </div>
                <div class="bagian5text2">
                    <h3>Rp. {{$dataorders->SUBTOTAL_TRANSAKSI}},-</h3>
                </div>
            </div>
            <div class="bagian6" style="margin-top: 30px;">
                <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Payment Method :</h1>
                <div class="bagian6text" style="border-radius: 10px;">
                    <h3 style="font-size: 120%; padding: 2%; margin-bottom: 0;">{{$dataorders->CARA_PEMBAYARAN}}</h3>
                </div>
                <div class="bagian6deatilpembayaran" style="border-radius: 10px;">
                    <div class="empty"></div>
                    <div class="bagian6text1">
                        <h3>Order Subtotal :</h3>
                        <h3>Delivery Fee :</h3>
                        <h3>Points Used :</h3>
                        <h3>Total :</h3>
                        <h3>Points Earned :</h3>
                    </div>
                    <div class="bagian6text2">
                        <h3>Rp. {{$dataorders->SUBTOTAL_TRANSAKSI}},-</h3>
                        <h3>Rp. {{$dataorders->ONGKIR}},-</h3>
                        <h3>Rp. {{$dataorders->PAKE_POIN}},-</h3>
                        <h3>Rp. {{$dataorders->TOTAL_BAYAR}},-</h3>
                        <h3>Rp. {{$dataorders->DAPET_POIN}},-</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<div>
    <button id="btnScrollTop" onclick="scrollToTop()">
        <i class="material-icons">keyboard_double_arrow_up</i>
    </button>
</div>

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
            <img style="width: 90%; height: 38%;"src="/image/logo.png">
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
