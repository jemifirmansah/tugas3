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
    return view('welcome');
});

Route::get('template', function () {
    return view('template');
});

Route::get('Beranda', function () {
    return view('Beranda');
});

Route::get('Produk', function () {
    return view('Produk');
});

Route::get('Kategori', function () {
    return view('Kategori');
});

Route::get('Login', function () {
    return view('Login');
});

Route::get('Pelanggan', function () {
    return view('Pelanggan');
});

Route::get('Supplier', function () {
    return view('Supplier');
});

Route::get('Promo', function () {
    return view('Promo');
});

Route::get('cart', function () {
    return view('frontview.cart');
});

Route::get('home', function () {
    return view('frontview.home');
});

Route::get('login', function () {
    return view('frontview.login');
});

Route::get('product', function () {
    return view('frontview.product');
});