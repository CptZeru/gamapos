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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/login', 'UserController@LoginIndex')->name('login');
Route::post('/login', 'UserController@LoginPost')->name('loginPost');
Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/daftar', function () {
    return view('auth.register');
});
Route::get('/daftarUsaha', function () {
    return view('auth.registProfilUsaha');
});
Route::get('/store', 'UserController@ListToko')->name('bukaToko');
Route::get('/items', 'ItemController@TokoKelolaProduk');
Route::get('/stock/{id}', 'ItemController@KelolaStok')->name('kelolaStok');
Route::get('/pengaturan', 'UserController@UserSettings');
Route::get('/daftarpesanan', function () {
    return view('orders.daftarPesanan');
});

Route::get('/riwayat', 'OrderController@index')->name('order.riwayat');
Route::get('/kasir', 'OrderController@cashier')->name('order.kasir');
Route::get('/pesanan', 'OrderController@onlineOrder')->name('order.onlineOrder');
Route::get('/detailpesanan', 'OrderController@detailOrder')->name('order.detailOrder');
