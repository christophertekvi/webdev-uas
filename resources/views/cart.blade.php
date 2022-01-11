<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MakanYuk | {{$title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons"/>

    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/cart.css" />
    <script type="text/javascript" src="js/template.js"></script>

    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap.css" />
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

    @include('partials.navbar-sign-in')
    <form method="POST">
        <div class="cart_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cart_container">
                            <div class="cart_title">Cart<small> ({{ \App\Models\Cart::getCount() }} item in your cart) </small></div>
                            <div class="cart_items">

                                @foreach ($cart as $m)
                                    {{-- //<h5>{{ $m->nama_menu }}  </h5> --}}

                                {{-- @for ($m = 0; $m < count($cart); $m++) --}}
                                <ul class="cart_list">
                                    <li class="cart_item clearfix">
                                        {{-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div> --}}
                                        <div class="cart_item_image"><img style="width: 100%; height: 90%; margin-top:11%" src="data:image/png;base64,{{ chunk_split(base64_encode($m->foto_menu)) }}" alt=""></div>
                                        <div style= "width: 70%; margin-left: 5%; margin-top:1%" class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col" style="width: 30%">
                                                <div class="cart_item_title">Menu Name</div>
                                                <div class="cart_item_text">{{ $m->nama_menu }} </div>
                                            </div>
                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title">Quantity</div>
                                                <div class="quantity" style="transform: translateY(30px);">
                                                    <input class="form-control d-inline text-center me-3 txtJumlah" type="number" value="{{$m->qty}}" style="max-width: 6rem">
                                                    <form method="POST">
                                                        @csrf

                                                        <button class="btn btn-outline-dark flex-shrink-0" type="button" name="btnUpdate" value="1">
                                                            <i class="btnUpdate me-1"></i>
                                                            Update
                                                        </button>
                                                    </form>
                                                </div>
                                                {{-- <div class="cart_item_text">{{ $m->qty }} </div> --}}
                                           </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title">Price</div>
                                                <div class="cart_item_text">Rp. {{$m->harga_menu}}</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Subtotal</div>
                                                <div class="cart_item_text">Rp. {{$m->harga_menu*$m->qty}}</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                {{-- @endfor --}}
                                @endforeach
                            </div>
                            <div class="order_total">
                                <div style= "float: right; margin-right: 3%"class="order_total_content text-md-right">
                                    <div class="order_total_title">Order Total:</div>
                                    {{-- @for ($m = 0; $m < count($cart); $m++)
                                    <div class="order_total_amount">  {{ $cart[$m]["menu"]->HARGA_MENU*$cart[$m]["jumlah"]}} </div>
                                    @endfor --}}
                                </div>
                            </div>

                            <div class="cart_buttons">
                                <button href="/home-sign-in"  type="button" class="button cart_button_clear">Back</button>
                                <button href="/checkout" style= "background-color: #e25f21;" type="button" class="button cart_button_checkout">Check Out</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div>
        <button id="btnScrollTop" onclick="scrollToTop()">
            <i class="material-icons">keyboard_double_arrow_up</i>
        </button>
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
