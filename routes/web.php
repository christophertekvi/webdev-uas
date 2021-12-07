<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/home-sign-in', function () {
    return view('home-sign-in');
});

Route::get('/about-sign-in', function () {
    return view('about-sign-in');
});

Route::get('/menu', function () {
    return view('menu');
});
