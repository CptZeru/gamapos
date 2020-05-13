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
    return view('dashboard');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/daftar', function () {
    return view('auth.register');
});
Route::get('/daftarUsaha', function () {
    return view('auth.registProfilUsaha');
});
Route::get('/store', function () {
    return view('openStores');
});
Route::get('/items', function () {
    return view('items');
});
Route::get('/pengaturan', function () {
    return view('settings');
});
Route::get('/daftarpesanan', function () {
    return view('orders.daftarPesanan');
});

Route::get('/riwayat', 'OrderController@index')->name('order.riwayat');
Route::get('/kasir', 'OrderController@cashier')->name('order.kasir');
Route::get('/pesanan', 'OrderController@onlineOrder')->name('order.onlineOrder');
Route::get('/detailpesanan', 'OrderController@detailOrder')->name('order.detailOrder');
