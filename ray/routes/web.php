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
    return view('index');
})->name('home');

Route::get('Portfolio', function () {
    return view('Portfolio');
})->name('Portfolio');

Route::get('SinglePortolio', function () {
    return view('SinglePortolio');
})->name('SinglePortolio');

Route::get('Blog', function () {
    return view('Blog');
})->name('Blog');

Route::get('BlogDetails', function () {
    return view('BlogDetails');
})->name('BlogDetails');

Route::get('Shop', function () {
    return view('Shop');
})->name('Shop');

Route::get('ProductDetails', function () {
    return view('ProductDetails');
})->name('ProductDetails');
