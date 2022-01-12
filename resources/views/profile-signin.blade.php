<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MakanYuk | {{ $title }}</title>
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
        <link rel="stylesheet" href="css/cart.css" />
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
              <a href="\home-sign-in">
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

        <div class="profile">
                <div class="profilecontrol">
                     <div class="controlbutton">
                        <button class="tablinks" onclick="openCity(event, 'EditProfile')" id="defaultOpen">Edit Profile</button>
                        <button class="tablinks" onclick="openCity(event, 'ChangePass')">Change Password</button>
                        <button class="tablinks" onclick="openCity(event, 'Orders')">Orders</button>
                        <button class="tablinks" onclick="openCity(event, 'FavMenu')">Favorite Menus</button>
                        <button class="tablinks" onclick="openCity(event, 'SignOut')">Sign Out</button>
                    </div>
                    <div id="EditProfile" class="tabcontent">
                        <div class="changeProfilePic">
                            {{-- @if(Auth::user()->image)
                                <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="..." style="width: 100px;height: 100px; margin: 50px 300px 20px 300px; ">
                            @endif --}}
                            {{-- @if (session()->has('foto')) --}}
                            {{-- <img src="image/user.png"> --}}
                            @if (!empty(session('foto')))
                            <img src="data:image/jpg;base64,{{ chunk_split(base64_encode(session('foto'))) }}" alt="foto">
                            {{-- <img img src="data:image/JPG;base64,'.$src.'"/> --}}
                            @else
                            <img src="image/user.png">
                            @endif
                            {{-- <img src="image/user.png"> --}}
                            <input type="file" id="image" name="image">
                            {{-- <label for="file" id="uploadPhoto">Change Photo</label> --}}
                            {{-- <p>UserID</p> --}}
                        </div>
                        <div class="editinfo">
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Name :</h5>
                            </div>
                            <div class="inputProfile">
                              <input type="text" name="nama" id="input-name" value=" {{ session('firstname') }} {{session('lastname')}} ">
                            </div>
                          </div>
                          {{-- <div class="controlinfo">
                            <div class="controltext">
                                <h5>Last Name :</h5>
                              </div>
                              <div class="inputProfile">
                                <input type="text" name="nama" id="input-name" value=" {{ session('lastname') }} ">
                              </div>
                            </div> --}}
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>E-mail :</h5>
                            </div>
                            <div class="inputProfile">
                              <input type="text" name="nama" id="input-name" value="{{ session('email') }}">
                            </div>
                          </div>
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Phone :</h5>
                            </div>
                            <div class="inputProfile">
                              <input type="text" name="nohp" id="input-phone" value="{{ session('noHP') }}">
                            </div>
                          </div>
                          {{-- <div class="controlinfo">
                            <div class="controltext">
                              <h5>Gender :</h5>
                            </div>
                            <div class="inputGender">
                                <div class="rbCowok">
                                    <input type="radio" name="gender" id="cowok"> Female
                                </div>
                                <div class="rbCewek">
                                    <input type="radio" name="gender" id="cewek"> Male
                                </div>
                            </div>
                          </div> --}}
                          <div class="controlinfo">
                            <div class="controltext">
                              <h5>Address :</h5>
                            </div>
                            <div class="inputAddress">
                              <textarea id="address" name="address" rows="6" cols="28"> {{session('alamat')}} </textarea>
                            </div>
                          </div>
                          <div class="button-saveProfile">
                            <div class="cancel-profile">
                                <button>Cancel</button>
                            </div>
                            <div class="save-profile">
                                <button>Save</button>
                            </div>
                          </div>

                        </div>
                    </div>
                    <div id="ChangePass" class="tabcontent">
                      <div class="controltextAndimg">
                          <div class="imgcontrol">
                            <img src="image/user.png" alt="">
                          </div>
                          <div class="textcontrol">
                            <p style="font-size: 20px; text-align: center"> {{session('firstname')}}  </p>
                            <p style="font-size: 20px; text-align: center"> &nbsp {{session('lastname')}}  </p>

                            {{-- <br><p>User ID</p> --}}
                          </div>
                      </div><br>
                      {{-- <div class="controlinput">
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
                      <div class="button-savePass">
                        <div class="cancel-pass">
                            <button>Cancel</button>
                        </div>
                        <div class="save-pass">
                            <button type="submit" formaction="POST">Save</button>
                        </div>
                      </div> --}}
                      <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        @if($errors)
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                        <form class="form-horizontal" method="POST" action="{{ route('changePasswordPost') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                                <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                                <div class="col-md-6">
                                                    <input id="current-password" type="password" class="form-control" name="current-password" required>

                                                    @if ($errors->has('current-password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('current-password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                                <label for="new-password" class="col-md-4 control-label">New Password</label>

                                                <div class="col-md-6">
                                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                                    @if ($errors->has('new-password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('new-password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                                <div class="col-md-6">
                                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary" style="background-color: #e25f21; margin-bottom: 50px">
                                                        Change Password
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                      {{-- @foreach ($orders as $o) --}}
                        <div id="orderOngoing" class="orderOngoing">
                            <div class="orderOngoingAll">
                                <ul class="cart_list">
                                    <li class="cart_item clearfix">
                                        <div style= "width: 70%; " class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title">Transaction ID</div>
                                                <div class="cart_item_text"> {{session('orders')}} </div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Total</div>
                                                <div class="cart_item_text">Rp. {{session('total')}}</div>
                                            </div>
                                        </div>
                                        {{-- <div class="detail">
                                            <a> Detail </a>
                                        </div> --}}
                                    </li>
                                </ul>
                            {{-- <p style="margin: 100px">  {{session('orders')}} </p> --}}
                            </div>
                        </div>
                      {{-- @endforeach --}}

                      <div id="orderCompleted" class="orderOngoing">

                      </div>
                    </div>
                    <div id="FavMenu" class="tabcontent">
                        <div class="favMenu">
                            @if (session()->get('fav'))
                            <p> {{session('fav')}} </p>
                            @else
                            <h3>You do not have any favorite menus yet.</h3>
                            @endif
                        </div>
                    </div>
                    <div id="SignOut" href="/home">
                        {{-- <p>balik ke home</p> --}}
                    </div>
                </div>
        </div>

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
              <a href="\home-sign-in" class="text-reset">Home</a>
            </p>
            <p>
              <a href="\menu" class="text-reset">Menu</a>
            </p>
            <p>
              <a href="\about-sign-in" class="text-reset">About Us</a>
            </p>
            <p>
              <a href="\faqs-sign-in" class="text-reset">FAQs</a>
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
        //   if(tabcontent[i].id == cityName){
        //     tabcontent[i].style.display = "block";
        //   }else{
        //     tabcontent[i].style.display = "none";
        //   }
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
    function openOrders(evt, Orders) {
      var x, orderOngoing, tabOrders;
      orderOngoing = document.getElementsByClassName("orderOngoing");
      for (x = 0; x < orderOngoing.length; x++) {
        orderOngoing[x].style.display = "none";
      }
      tabOrders = document.getElementsByClassName("tabOrders");
      for (x = 0; x < tabOrders.length; x++) {
        tabOrders[x].className = tabOrders[x].className.replace(" active", "");
      }
      document.getElementById(Orders).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("ongoing-tab").click();
    </script>
    </body>


</html>
