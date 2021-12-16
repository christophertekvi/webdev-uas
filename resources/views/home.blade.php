@extends('layouts.main')

@section('isiWeb')
    <div class="banner">
      <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3500">
            <img src="image/banner/1.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="image/banner/3.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="image/banner/2.png" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    {{-- MOTTO --}}
    <div class="moto">
      <h1 style="text-align: center; margin: 100px 100px 50px 100px; font-family: Outfit, sans-serif;">
        OUR MOTTO
      </h1>
      <div class="container2">
        <div class="Natural">
          <img style="margin-top: 7px"
            src="https://img.icons8.com/material/50/000000/natural-food.png"
          />
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top: 10px;">Natural</p>
          <p style="font-style: italic;">
            We use all natural ingredients from our supplier.
          </p>
        </div>
        <div class="Fresh">
          <img style="margin-top: 7px"
            src="https://img.icons8.com/material-outlined/50/000000/hot-breakfast.png"
          />
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top: 10px;" >Fresh</p>
          <p style="font-style: italic">
            Every meal is made by order therefore they are made fresh everyday.
          </p>
        </div>
        <div class="Price">
          <img style="margin-top: 7px" src="https://img.icons8.com/material/50/000000/low-price.png" />
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top: 10px;">Low Price</p>
          <p style="font-style: italic;">
            Delicious home-cooked meal with reasonable price.
          </p>
        </div>
      </div>
    </div>

    {{-- Bestseller --}}

    <div class="bestseller">
      <h1 style="text-align: center; margin: 100px 100px 50px 100px; font-family: Outfit, sans-serif;">
        BESTSELLER
      </h1>
      <div class="container1">
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/ayambakar.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 37px;">Ayam Bakar</p>
          <p style="font-style: italic; ">
            Rp. 15.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/esteh.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 37px;">Es Teh</p>
          <p style="font-style: italic; ">
            Rp. 7.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/gurameasman.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 3px;">Gurame Asam</p>
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:2px; margin-bottom: 5px;">Manis</p>
          <p style="font-style: italic; ">
            Rp. 20.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/esjeruk.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 37px;">Es Jeruk</p>
          <p style="font-style: italic; ">
            Rp. 8.000
          </p>
        </div>
        <div class="bs1">
          <img style="height: 50%; margin-top: 10%;" src="image/menu/udanggrgtepung.png">
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:10px; margin-bottom: 3px;">Udang Goreng</p>
          <p class="deskripsi" style="font-family: 'Outfit', sans-serif; font-size: large; margin-top:2px; margin-bottom: 5px;">Tepung</p>
          <p style="font-style: italic; ">
            Rp. 18.000
          </p>
        </div>

      </div>
      <div class="buttonmenu">
        <button><a href="/menu.html" style="color: black;">Check out our menus!</a></button>
      </div>
    </div>

{{-- TESTIMONI --}}
    <div class="testi">
      <h1 style="text-align: center; margin: 100px 100px 50px 100px; font-family: Outfit, sans-serif;">
        WHAT THEY SAY
      </h1>
      <div class="container" style="justify-content: center">
        <div class="g-col-6">.g-col-6</div>
        <div class="g-col-6">.g-col-6</div>
        <div class="g-col-6">.g-col-6</div>
      </div>
    </div>
@endsection
