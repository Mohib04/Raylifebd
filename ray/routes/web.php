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

Route::get('About', function () {
    return view('About');
})->name('About');

Route::get('CustomerRevies', function () {
    return view('CustomerRevies');
})->name('CustomerRevies');

Route::get('Cart', function () {
    return view('Cart');
})->name('Cart');

Route::get('Wishlist', function () {
    return view('Wishlist');
})->name('Wishlist');

Route::get('Checkout', function () {
    return view('Checkout');
})->name('Checkout');

Route::get('Team', function () {
    return view('Team');
})->name('Team');

Route::get('LoginRegister', function () {
    return view('LoginRegister');
})->name('LoginRegister');

Route::get('Contact', function () {
    return view('Contact');
})->name('Contact');

Route::post('Contact', 'App\Http\Controllers\Contact\Contact@store')->name('contact-info');
Route::post('LoginRegister', 'App\Http\Controllers\Login\Login@store')->name('LoginRegister-Register');
