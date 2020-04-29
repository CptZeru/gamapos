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

Route::get('/riwayat', 'OrderController@index')->name('order.riwayat');
Route::get('/kasir', 'OrderController@cashier')->name('order.kasir');
Route::get('/pesanan', 'OrderController@onlineOrder')->name('order.onlineOrder');
