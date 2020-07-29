<?php

namespace App\Http\Controllers;

use Session;
use Storage;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $navActive = "Riwayat";
        Storage::disk('local')->put('navActive',$navActive);
        return view('orders.riwayat');
    }

    public function cashier(){
        $navActive = "Kasir";
        Storage::disk('local')->put('navActive',$navActive);
        return view('orders.kasir');
    }

    public function onlineOrder(){
        $url=env('API_URL').'/penjual/lokasi-today';
        $token = Session::get('token');
        $headers = [
            'Authorization' => 'Bearer ' . $token,        
            'Accept'        => 'application/json',
        ];
        $client = new Client();
        $requestApi = $client->get($url, ['headers'=>$headers]);
        $response = $requestApi->getBody(true);
        $responseArray = json_decode($response, true);
        echo "<script>console.log('".$responseArray['location'][0]['nama']."')</script>";
        $locations = $responseArray['location'];
        $navActive = "Pesanan Online";
        Storage::disk('local')->put('navActive',$navActive);
        return view('orders.onlineOrder', compact('locations'));
    }

    public function detailOrder(){
        return view('orders.detailPesanan');
    }
}
