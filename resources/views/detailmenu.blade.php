@extends('layouts.main')
@include('partials.head-home')
@section("isiWeb")
@include('partials.cssdetailmenu')
    <h1 style="text-align: center; margin: 50px 100px 50px 100px; font-family: Outfit, sans-serif;">
        DETAIL
    </h1>

    <div class="container">
        <form action="/action_page.php">
            <!-- <input type="date"/> -->
            <input style="margin-left: 8%;" name="somedate" type="date">
            <!-- <input min=""  class="calendar" type="date" id="datepicker" name="datepicker"> -->
        </form>
    </div>

    <div class="container">
        <div class="row gx-4 gx-lg-5 align-items-center">

            <div class="col-md-6">
                <div class="gambarmenu">
                    <img class="mb-5 mb-md-0" src="https://dummyimage.com/400x400/dee2e6/6c757d.jpg" alt="...">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail">
                    <h1 style="font-size: 30px;" class="display-5 fw-bolder">{{$nama}}</h1>
                    <div class="fs-5 mb-4">
                        <span>{{$m -> HARGA_MENU}}</span>
                    </div>
                    <p style="margin-bottom: 1px;" class="lead">
                        Description : <br>
                        <p>{{$m -> DESKRIPSI_MENU}}</p>
                    </p>
                    <div class="d-flex">
                        <p style="margin-right: 10px" class="lead">
                            Jumlah :
                        </p>
                        <input class="form-control text-center me-3" name="inputQuantity" type="number" value="1" min="1"  style="max-width: 6rem">

                    </div>
                    <button style="background-color: #e25f21; width: 180px; color: white; border: solid 1px #b2b2b2;" class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-plus-fill me-1"></i>
                        Add to cart
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection
