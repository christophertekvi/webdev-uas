<div class="topbar">
    <nav class="navbar navbar-custom navbar-expand-md bg-transparent justify-content-center">
      <a href="/" class="navbar-brand d-flex w-50 mr-auto"></a>
      <div  class="navbar-collapse collapse w-100" id="collapsingNavbar3">
          <ul class="navbar-nav w-100 justify-content-center">
              <li class="nav-item {{ ($title === "Home") ? 'active' : '' }}">
                  <a class="nav-link " href="/">HOME</a>
              </li>
              <li class="nav-item {{ ($title === "Menu") ? 'active' : '' }}">
                  <a class="nav-link " href="/menu" >MENU</a>
              </li>
              <li class="nav-item {{ ($title === "About Us") ? 'active' : '' }}">
                  <a class="nav-link " href="/about">ABOUT US</a>
              </li>
              <li class="nav-item {{ ($title === "FaQ") ? 'active' : '' }}">
                  <a class="nav-link " href="/faqs">FAQS</a>
              </li>
          </ul>
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
              <a class="text-reset me-3" href="/sign-in">
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
                <a style="text-align: left; color: black;" class="dropdown-item" >Points : </a>
              </li>
              <li>
                <a style="text-align: left; color: black;" class="dropdown-item" href="/">Sign Out</a>
              </li>
            </ul>

              </ul>
          </ul>
      </div>
    </nav>
  </div>
