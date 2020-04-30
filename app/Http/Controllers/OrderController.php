<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('orders.riwayat');
    }

    public function cashier(){
        return view('orders.kasir');
    }

    public function onlineOrder(){
        return view('orders.onlineOrder');
    }

    public function detailOrder(){
        return view('orders.detailPesanan');
    }
}
