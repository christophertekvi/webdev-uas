<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makan Yuk | {{ $title }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons"/>

    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/checkout.css" />
    <script type="text/javascript" src="js/template.js"></script>

    <link href="css/metro.css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>

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

@include('partials.navbar-sign-in')
<form method="post">
        <div class="container1">
            <p style="font-family: 'Outfit', sans-serif; font-size: 220%; margin-top: 30px;">CHECKOUT</p>
        </div>
        <div class="container2" style="margin-top: 30px;">
            <div class="controlcontainer2">
                <div class="bagian1">
                    <div class="tanggalpesanan" style="border-radius: 10px;">
                        <p>Tanggal Pesanan</p>
                    </div>
                </div>

                <div class="input-control text" data-role="datepicker" >
                    <input type="text" name="tanggalPesan" required style="border-radius: 10px"/>

                </div>

                <div class="bagian2" style="margin-top: 30px;">
                    <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Alamat :</h1>
                    <textarea name="alamat" id="alamatuser" cols="30" rows="6" style="border-radius: 10px;"></textarea>
                </div>

                <div class="bagian3" style="margin-top: 30px;">
                    <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Pesanan:</h1>

                    @foreach ($checkout as $c)
                        <div class="pesanan" style="border-radius: 10px;">
                            <div class="fotomenu">
                                <div class="gambar">
                                    <img src="user" alt="" style="width: 100%; height: 100%; margin-left: 10px;">
                                </div>
                            </div>
                            <div class="detailmenu">
                                <div class="detailmenu1">
                                    <h1>{{ $c->nama_menu }}</h1>
                                    <h3>Rp. {{ $checkout->harga_menu }}</h3>
                                </div>
                                <div class="detailmenu2">
                                    <h3>Jumlah : {{ $c->qty }}</h3>
                                </div>
                            </div>
                            <div class="subtotal">
                                <div class="emptysubtotal">

                                </div>
                                <div class="subtotaltext">
                                    <h3>Subtotal : Rp. {{ $c->harga_menu * $c->qty }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                <div class="bagian4" style="margin-top: 30px;">
                    <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Pesan :</h1>
                    <div class="pesaninput">
                        <textarea name="pesanpelanggan" id="textpesan" style="border-radius: 10px;"></textarea>
                    </div>
                </div>
                <div class="bagian5" style=" border-radius: 10px;">
                    <div class="empty"></div>
                    <div class="bagian5text1">
                        <h3>Ongkos kirim :</h3>
                        <h3>Subtotal :</h3>
                    </div>
                    <div class="bagian5text2">
                        <h3>........</h3>
                        <h3>......</h3>
                    </div>
                </div>
                <div class="bagian7" style=" border-radius: 10px;">
                    <div class="empty"></div>
                    <div class="bagian7text1">
                        <h3>Pakai Poin :</h3>
                    </div>
                    <div class="bagian7text2">
                        <input class="coba"type="checkbox" name="" id="bluecheckbox">
                        <span class="checkmark"></span>
                        <h3>........</h3>
                    </div>
                </div>
                <div class="bagian6" style="margin-top: 30px;">
                    <h1 style="font-family: 'Outfit', sans-serif; font-size: 170%;">Metode Pembayaran :</h1>
                    <div class="bagian6radiobutton" style="border-radius: 10px; display: flex; align-items: center;">
                        <div class="rdbuttoncod" style="display: flex; padding: 10px; font-family: 'Readex Pro', sans-serif; align-items: center">
                            <input class ="rd" type="radio" name="cod" id="radiobuttoncod" style="height:15px; width:15px;" data-color = "blue">
                            <h3 style="font-size: 120%; ">COD</h3>
                        </div>
                        <div class="rdbuttontransferbank" style="display: flex; padding: 10px; font-family: 'Readex Pro', sans-serif; align-items: center;">
                            <input type="radio" name="transferBank" id="radiobuttontransferbank" style="height:15px; width:15px;" class ="rd" >
                            <h3 style="font-size: 120%;">Transfer Bank</h3>
                        </div>
                    </div>
                    <div class="bagian6deatilpembayaran" style="border-radius: 10px;">
                        <div class="empty"></div>
                        <div class="bagian6text1">
                            <h3>Ongkos kirim :</h3>
                            <h3>Subtotal :</h3>
                            <h3>Pakai Point :</h3>
                            <h3>Total :</h3>
                            <h3>Dapat Poin :</h3>
                        </div>
                        <div class="bagian6text2">
                            <h3>........</h3>
                            <h3>......</h3>
                            <h3>........</h3>
                            <h3>......</h3>
                            <h3>........</h3>

                        </div>
                    </div>
                    <div class="buttoncheckout">
                        <div class="empty2">

                        </div>
                        <div class="buttoncheckoutcontrol">
                            <button>Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
    <script>
const btn1= $('#radiobuttoncod');
const btn2= $('#radiobuttontransferbank');


btn1.click( function() {
    btn1.css('accent-color', 'blue');
    btn2.css('accent-color', 'white');
});

btn2.click( function() {
    btn1.css('accent-color', 'white');
    btn2.css('accent-color', 'blue');
});
    </script>
</html>
