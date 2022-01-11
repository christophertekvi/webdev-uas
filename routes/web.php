<?php

use App\Http\Controllers\CartController;
use App\User;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/home/{slug}', [HomeController::class, 'index']);


Route::get('/faqs', function () {
    return view('faqs', [
        "title" => "FaQ"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About Us"
    ]);
});

Route::get('/sign-in', [SignInController::class, 'index']);
Route::post('/sign-in', [SignInController::class, 'authenticate']);

Route::post('/home-sign-in',[SignInController::class,'authenticate']);
Route::get('/sign-up',[SignUpController::class,'index']);
Route::post('/sign-up',[SignUpController::class,'store']);

Route::get('/home-sign-in', function () {
    return view('home-sign-in',[
        "title" => "Home"
    ]);
});

Route::get('/about-sign-in', function () {
    return view('about-sign-in',[
        "title" => "About Us"
    ]);
});

Route::get('/faqs-sign-in', function () {
    return view('faqs-sign-in',[
        "title" => "FaQ"
    ]);
});

// Route::get('/menu', function () {
//     return view('menu',[
//         "title" => "Menu"
//     ]);
// });

Route::get('/profile-signin', function () {
    return view('profile-signin',[
        "title" => "Profile"
    ]);
});

Route::get('/cart', [CartController::class, 'index']);

Route::get('/detail-pesanan', function () {
    return view('detail-pesanan',[
        "title" => "Detail Pesanan"
    ]);
});

Route::get('/checkout', function () {
    return view('checkout',[
        "title" => "Checkout"
    ]);
});


// Route::get('/detailmenu', function () {
//     return view('detailmenu',[
//         "title" => "Detail Menu"
//     ]);
// });

//buat signup
// Route::get('/sign-up', [SignUpController::class, 'index']);
Route::get("user", [SignUpController::class, 'create']);
Route::post("/sign-up", [SignUpController::class, 'store']);

//signout
Route::get('/home' ,[SignInController::class, 'flush']);

Route::prefix("/menu-sign-in")->group(function() {
    Route::get("/", [MenuController::class, "lists"]);
    Route::get("/{id}", [MenuController::class, "details"]);

    // Add to Cart
    Route::post("/", [MenuController::class, "addSingleCart"]);
    Route::post("/{id}", [MenuController::class, "addDetailCart"]);
});

Route::prefix("/menu")->group(function() {
    Route::get("/", [MenuController::class, "list"]);
    Route::get("/{id}", [MenuController::class, "detail"]);

    // Add to Cart
    // Route::post("/", [MenuController::class, "addSingleCart"]);
    // Route::post("/{id}", [MenuController::class, "addDetailCart"]);
});

Route::prefix("/cart")->group(function() {
    Route::get("/", [MenuController::class, "showCart"]);
});

Route::get('/changePassword', [App\Http\Controllers\SignInController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\SignInController::class, 'changePasswordPost'])->name('changePasswordPost');

