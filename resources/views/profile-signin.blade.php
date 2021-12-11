<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MakanYuk</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap"
          rel="stylesheet"
        />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Material+Icons"
        />

        <link rel="stylesheet" href="css/template.css" />
        <link rel="stylesheet" href="css/profile.css" />
        <script type="text/javascript" src="js/template.js"></script>
        <script type="text/javascript" src="js/profile.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"
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
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"
        ></script>
      </head>

      <body style="background-color: floralwhite">
        <!--topbar-->
        <div class="header-top">
          <div class="row">
            <div>
              <a href="index.html">
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
                  <a class="nav-link" aria-current="page" href="./home.html"
                    >HOME</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./menu.html">MENU</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./about.html">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./faqs.html">FAQS</a>
                </li>
              </ul>
              <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <a class="text-reset me-3" href="/cart">
                  <i style="color: #ffffff" class="fas fa-shopping-cart"></i>
                </a>
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
                    <a style="text-align: left; color: black;" class="dropdown-item" href="#">Points : 1000</a>
                  </li>
                  <li>
                    <a style="text-align: left; color: black;" class="dropdown-item" href="/home">Sign Out</a>
                  </li>
                </ul>
              </ul>
            </div>
          </nav>
        </div>

        <div class="profile">
                <div class="profilecontrol">
                     <div class="controlbutton">
                        <button class="tablinks" onclick="openCity(event, 'EditProfile')" id="defaultOpen">Edit Profile</button>
                        <button class="tablinks" onclick="openCity(event, 'ChangePass')">Change Password</button>
                        <button class="tablinks" onclick="openCity(event, 'Orders')">Orders</button>
                        <button class="tablinks" onclick="openCity(event, 'FavMenus')">Favorite Menus</button>
                        <button class="tablinks" onclick="openCity(event, 'SIgnOut')">Sign Out</button>
                    </div>
                    <div id="EditProfile" class="tabcontent">
                        <div class="changeProfilePic">
                            <img src="image/user.png">
                            <input type="file" id="file">
                            <label for="file" id="uploadPhoto">Change Photo</label>
                            {{-- <p>UserID</p> --}}
                        </div>
                        <div class="editinfo">
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Name :</h5>
                            </div>
                            <div class="inputProfile">
                              <input type="text" name="nama" id="input-name">
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>E-mail :</h5>
                            </div>
                            <div class="inputProfile">
                              <input type="text" name="nama" id="input-name">
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Phone :</h5>
                            </div>
                            <div class="inputProfile">
                              <input type="text" name="nohp" id="input-phone">
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Gender</h5>
                            </div>
                            <div class="inputGender">
                              <div class="rbCowok">
                                <input type="radio" name="Laki_Laki" id="cowok"> Laki-Laki
                              </div>
                              <div class="rbCewek">
                                <input type="radio" name="Perempuan" id="cewek"> Perempuan
                              </div>
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Address :</h5>
                            </div>
                            <div class="inputAddress">
                              <textarea id="address" name="address" rows="6" cols="25"></textarea>
                            </div>
                          </div>
                          <div class="save-profile">
                            <button>Save</button>
                          </div>

                        </div>
                    </div>
                    <div id="ChangePass" class="tabcontent">
                      <div class="controltextAndimg">
                          <div class="imgcontrol">
                            <img src="image/user.png" alt="">
                          </div>
                          <div class="textcontrol">
                            <h2>Name</h2>
                            {{-- <br><p>User ID</p> --}}
                          </div>
                      </div><br>
                      <div class="controlinput">
                        <div class="textcontrol-InputPass">
                          <h5>Old Password :</h5>
                        </div>
                        <div class="controlinputPass">
                          <input type="password" name="oldPass" id="oldPass">
                        </div>
                      </div>
                      <div class="controlinput">
                        <div class="textcontrol-InputPass">
                          <h5>New Password :</h5>
                        </div>
                        <div class="controlinputPass">
                          <input type="password" name="newPass" id="newPass">
                        </div>
                      </div>
                      <div class="controlinput">
                        <div class="textcontrol-InputPass">
                          <h5>Confirm Password :</h5>
                        </div>
                        <div class="controlinputPass">
                          <input type="password" name="confirmPass" id="confirmPass">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="save-password">
                        <button>Save</button>
                      </div>
                    </div>
                    <div id="Orders" class="tabcontent">
                      <div class="buttoncontrolOrders">
                        <div class="button-ongoingTab">
                          <button class="tabOrders" onclick="openOrders(event, 'orderOngoing')" id="ongoing-tab">Ongoing</button>
                        </div>
                        <div class="button-completedTab">
                          <button class="tabOrders" onclick="openOrders(event, 'orderCompleted')">Completed</button>
                        </div>
                      </div>
                      <div id="orderOngoing" class="orderOngoing">
                        <div class="orderOngoingAll">
                            proses
                        </div>
                      </div>
                      <div id="orderCompleted" class="orderOngoing">

                      </div>
                    </div>
                    <div id="FavMenu" class="tabcontent">
                        <h3>Favorite Menus</h3>
                    </div>
                    <div id="SignOut" href="/home">
                        {{-- <p>balik ke home</p> --}}
                    </div>
                </div>
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

  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    function openOrders(evt, tipePesanan) {
      var x, pesanandalamproses, tabOrders;
      pesanandalamproses = document.getElementsByClassName("pesanandalamproses");
      for (x = 0; x < pesanandalamproses.length; x++) {
        pesanandalamproses[x].style.display = "none";
      }
      tabOrders = document.getElementsByClassName("tabOrders");
      for (x = 0; x < tabOrders.length; x++) {
        tabOrders[x].className = tabOrders[x].className.replace(" active", "");
      }
      document.getElementById(tipePesanan).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("ongoing-tab").click();
    </script>
    </body>


</html>
