<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/product-detail', function () {
    return view('product_detail');
});

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard-customer', function () {
    return view('customer.dashboard');
});
Route::get('/chat', function () {
    return view('admin.chat');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/customer', function () {
    return view('admin.customer');
});
Route::get('/transaksi', function () {
    return view('admin.transaksi');
});

