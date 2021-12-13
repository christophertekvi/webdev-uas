<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout.css">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
    <body>
        <div class="container1">
            <h1 style="font-size: 54px">Checkout</h1>
        </div>
        <div class="container2" style="margin-top: 60px;">
            <div class="controlcontainer2">
                <div class="bagian1">
                    <div class="tanggalpesanan" style="border-radius: 10px;">
                        <p>Tanggal Pesanan : .....</p>
                    </div>
                </div>
                <div class="bagian2" style="margin-top: 30px;">
                    <h1 style="font-family: 'Readex Pro', sans-serif;">Alamat :</h1>
                    <textarea name="alamat" id="alamatuser" cols="30" rows="10" style="border-radius: 10px;"></textarea>
                </div>
                <div class="bagian3" style="margin-top: 30px;">
                    <h1 style="font-family: 'Readex Pro', sans-serif;">Pesanan:</h1>
                    <div class="pesanan" style="border-radius: 10px;">
                        <div class="fotomenu">
                            <div class="gambar">
                                <img src="user" alt="" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                        <div class="detailmenu">
                            <div class="detailmenu1">
                                <h1>Mie Goreng</h1>
                                <h3>Rp .....</h3>
                            </div>
                            <div class="detailmenu2">
                                <h3>Jumlah :</h2>
                            </div>
                        </div>
                        <div class="subtotal">
                            <div class="emptysubtotal">

                            </div>
                            <div class="subtotaltext">
                                <h3>Subtotal : .....</h3>
                            </div>
                        </div>
                    </div>
                    <div class="pesanan" style="border-radius: 10px;">
                        <div class="fotomenu">
                            <div class="gambar">
                                <img src="user" alt="" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                        <div class="detailmenu">
                            <div class="detailmenu1">
                                <h1>Mie Goreng</h1>
                                <h3>Rp .....</h3>
                            </div>
                            <div class="detailmenu2">
                                <h3>Jumlah :</h2>
                            </div>
                        </div>
                        <div class="subtotal">
                            <div class="emptysubtotal">

                            </div>
                            <div class="subtotaltext">
                                <h3>Subtotal : .....</h3>
                            </div>
                        </div>
                    </div>
                    <div class="pesanan" style="border-radius: 10px;">
                        <div class="fotomenu">
                            <div class="gambar">
                                <img src="user" alt="" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                        <div class="detailmenu">
                            <div class="detailmenu1">
                                <h1>Mie Goreng</h1>
                                <h3>Rp .....</h3>
                            </div>
                            <div class="detailmenu2">
                                <h3>Jumlah :</h2>
                            </div>
                        </div>
                        <div class="subtotal">
                            <div class="emptysubtotal">

                            </div>
                            <div class="subtotaltext">
                                <h3>Subtotal : .....</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bagian4" style="margin-top: 30px;">
                    <h1 style="font-family: 'Readex Pro', sans-serif;">Pesan :</h1>
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
                    <h1 style="font-family: 'Readex Pro', sans-serif;">Metode Pembayaran :</h1>
                    <div class="bagian6radiobutton" style="border-radius: 10px; display: flex; align-items: center;">
                        <div class="rdbuttoncod" style="display: flex; padding: 10px; font-family: 'Readex Pro', sans-serif; align-items: center">
                            <input class ="rd" type="radio" name="cod" id="radiobuttoncod" style="height:20px; width:20px;" data-color = "blue">
                            <h3>COD</h3>
                        </div>
                        <div class="rdbuttontransferbank" style="display: flex; padding: 10px; font-family: 'Readex Pro', sans-serif; align-items: center;">
                            <input type="radio" name="transferBank" id="radiobuttontransferbank" style="height:20px; width:20px;" class ="rd" >
                            <h3>Transfer Bank</h3>
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
    </body>
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
