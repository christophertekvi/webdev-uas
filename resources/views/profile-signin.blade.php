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

        <link rel="stylesheet" href="template.css" />
        <link rel="stylesheet" href="profile.css" />
        <script type="text/javascript" src="template.js"></script>
        <script type="text/javascript" src="profile.js"></script>

        <link rel="stylesheet" href="bootstrap.min.css" />
        <link rel="stylesheet" href="bootstrap.css" />
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
                <a class="text-reset me-3" href="#">
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
                    <a style="text-align: left; color: black;" class="dropdown-item" href="#">My Profile</a>
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
                        <button class="tablinks" onclick="openCity(event, 'UbahkataSandi')">Ubah kata Sandi</button>
                        <button class="tablinks" onclick="openCity(event, 'Pesanan')">Pesanan</button>
                        <button class="tablinks" onclick="openCity(event, 'MenuFavorit')">Menu Favorit</button>
                        <button class="tablinks" onclick="openCity(event, 'Keluar')">Keluar</button>
                    </div>
                    <div id="EditProfile" class="tabcontent">
                        <div class="gantiprofile">
                            <img src="image/user.png" alt="">
                        </div>
                        <div class="editinfo">
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Nama :</h5>
                            </div>
                            <div class="inputprofile">
                              <input type="text" name="nama" id="inputannama">
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Email :</h5>
                            </div>
                            <div class="inputprofile">
                              <input type="text" name="nama" id="inputannama">
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>No.HP :</h5>
                            </div>
                            <div class="inputprofile">
                              <input type="text" name="nohp" id="inputannotelp">
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Gender</h5>
                            </div>
                            <div class="inputgender">
                              <div class="inputcowok">
                                <input type="radio" name="Laki_Laki" id="cowok"> Laki-Laki
                              </div>
                              <div class="inputcewek">
                                <input type="radio" name="Perempuan" id="cewek"> Perempuan
                              </div>
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Alamat :</h5>
                            </div>
                            <div class="inputalamat">
                              <input type="text" name="nohp" id="inputannotelp">
                            </div>
                          </div>
                          <div class="controlbutton2">
                            <button>Ubah</button>
                          </div>

                        </div>
                    </div>
                    <div id="UbahkataSandi" class="tabcontent">
                      <div class="controltextandimg">
                          <div class="imgcontrol">
                            <img src="image/user.png" alt="">
                          </div>
                          <div class="textcontrol">
                            <h2>Nama Pengguna</h2>
                          </div>
                      </div><br>
                      <div class="controlinput">
                        <div class="textcontrolinputkatasandi">
                          <h5>Kata Sandi Lama :</h5>
                        </div>
                        <div class="controlinputkatasandi">
                          <input type="password" name="katasandilama" id="katasandilama">
                        </div>
                      </div>
                      <div class="controlinput">
                        <div class="textcontrolinputkatasandi">
                          <h5>Kata Sandi Baru :</h5>
                        </div>
                        <div class="controlinputkatasandi">
                          <input type="password" name="katasandibaru" id="katasandibaru">
                        </div>
                      </div>
                      <div class="controlinput">
                        <div class="textcontrolinputkatasandi">
                          <h5>Konfirmasi Kata Sandi Baru:</h5>
                        </div>
                        <div class="controlinputkatasandi">
                          <input type="password" name="konfirmasikatasandibaru" id="konfirmasikatasandibaru">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="controlbutton2">
                        <button>Ubah</button>
                      </div>
                    </div>
                    <div id="Pesanan" class="tabcontent">
                      <div class="buttoncontrolpesanan">
                        <div class="buttondalamproses">
                          <button class="tablinkspesanan" onclick="openPesanan(event, 'pesanandalamproses')" id="TerbukaPertama">Dalam Proses</button>
                        </div>
                        <div class="buttonselesai">
                          <button class="tablinkspesanan" onclick="openPesanan(event, 'pesananselesai')">Selesai</button>
                        </div>
                      </div>
                      <div id="pesanandalamproses" class="pesanandalamproses">
                        <div class="isipesanandalamproses">

                        </div>
                      </div>
                      <div id="pesananselesai" class="pesanandalamproses">
                        pesananselesai
                      </div>
                    </div>
                    <div id="MenuFavorit" class="tabcontent">
                        <h3>Menu Favorit</h3>
                        <p>Tokyo is the capital of Japan.</p>
                    </div>
                    <div id="Keluar" class="tabcontent">
                        <h3>Keluar</h3>
                        <p>Tokyo is the capital of Japan.</p>
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
    function openPesanan(evt, tipePesanan) {
      var x, pesanandalamproses, tablinkspesanan;
      pesanandalamproses = document.getElementsByClassName("pesanandalamproses");
      for (x = 0; x < pesanandalamproses.length; x++) {
        pesanandalamproses[x].style.display = "none";
      }
      tablinkspesanan = document.getElementsByClassName("tablinkspesanan");
      for (x = 0; x < tablinkspesanan.length; x++) {
        tablinkspesanan[x].className = tablinkspesanan[x].className.replace(" active", "");
      }
      document.getElementById(tipePesanan).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("TerbukaPertama").click();
    </script>
    </body>


</html>
