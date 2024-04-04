<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.index');
});
Route::get('/blog', function () {
    return view('app.blog');
});
Route::get('/checkout', function () {
    return view('app.checkout');
});
Route::get('/blog-detail', function () {
    return view('app.blog-details');
});
Route::get('/Contact', function () {
    return view('app.contact');
});
Route::get('/shop-detail', function () {
    return view('app.shop-detail');
});
Route::get('/shop-grid', function () {
    return view('app.shop-grid');
});
Route::get('/shopping-cart', function () {
    return view('app.shopping-cart');
});