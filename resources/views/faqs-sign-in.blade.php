<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MakanYuk | FaQ</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons"/>

        <link rel="stylesheet" href="css/template.css" />
        <link rel="stylesheet" href="css/faqs.css" />
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

        <div class="topbar">
          <nav class="navbar navbar-custom navbar-expand-md bg-transparent justify-content-center">
            <a href="/" class="navbar-brand d-flex w-50 mr-auto"></a>
            <div  class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home-sign-in">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu" >MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-sign-in">ABOUT US</a>
                    </li>
                    <li class="nav-item active">
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

        <div class="faqs">
            <h1>FAQs</h1>
            <h5>(Frequently Asked Questions)</h5>
            <div class="faqs-p">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Terms & Conditions
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      1. The menus displayed are available starting one day after the website is accessed (i.e. The menus displayed on December 7 are menus available starting on December 8).
                      <br> 2. Orders are made maximum one day before delivery time.
                      <br> 3. The maximum amount of orders of every meal is 50 packs. If you wanted to order more, you can contact us directly via e-mail (subject : "Order") or WhatsApp.
                      <br> 4. Every transactions will have Rp10.000 added for delivery fee.
                      <br> 5. Payments are made maximum one day before delivery time at 12.00 WIB.
                      <br> 6. Operational Hours :
                      <br>&emsp; Weekdays (Monday - Friday) - 07.00 WIB - 19.00 WIB
                      <br>&emsp; Weekends (Saturday & Sunday) - 08.00 WIB - 20.00 WIB
                      <br> 7. Orders are closed at 16.00 WIB for next day deliveries.
                      <br> 8. You will receive points in every transactions you made.
                      <br> 9. For every Rp1000 you will receive 1 point.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      How do I order?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="text-align: justify;">
                      Simply click "Menu" on the navigation bar. Then, choose the date of delivery that you wanted (since we are using the pre-order system and the menus differ by date). Click the menu that you wanted to order. Then, choose the number of packs that you wanted. If you want to checkout immediately, click "Order Now". But, if you still want to choose something else, you can click "Add to Cart".
                      <br>After that, click on the shopping cart icon on the top-right corner and select the menus that you want to order. Then, click the "Checkout" button. Make sure your orders are right. Do not forget to select the payment method and choose whether or not to use your points. After that, click "Order".
                      <br><br>*Make sure you are already signed in to your account.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Do I have to be a member in order to place a transaction?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="text-align: justify;">
                      Yes.
                      <br> If you do not have an account yet, you can simply sign up through our website. Click on the Profile icon on the top-right corner. Then, click "Sign Up" on the dropdown menu.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      When is the delivery time?
                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      Weekdays : starts at 08.00 WIB
                      <br>Weekends : starts at 09.00 WIB
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                      Which areas are covered?
                    </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      For now, we operate within Surabaya area only.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                      How can I check my order status?
                    </button>
                  </h2>
                  <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="text-align: justify;">
                      Click on the profile icon on the top-right corner then, click profile. After that, click "Orders" on the left horizontal tab. Here, you can see all of your ongoing and completed orders.
                      <br><br>*Make sure you are signed in to your account.
                    </div>
                  </div>
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
