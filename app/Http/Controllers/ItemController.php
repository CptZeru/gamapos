<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Storage;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class ItemController extends Controller
{
    public function TokoKelolaProduk(){
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
        $navActive = "Kelola Produk";
        Storage::disk('local')->put('navActive',$navActive);
        return view('items.index', compact('locations'));
    }

    public function KelolaStok($id){
        $url=env('API_URL').'/penjual/stok-barang/today/'.$id;
        $token = Session::get('token');
        $headers = [
            'Authorization' => 'Bearer ' . $token,        
            'Accept'        => 'application/json',
        ];
        $client = new Client();
        $requestApi = $client->get($url, ['headers'=>$headers]);
        $response = $requestApi->getBody(true);
        $responseArray = json_decode($response, true);
        $menus = $responseArray['result'];
        echo "<script>console.log('".$response."')</script>";
        return view('items.kelolaStok', compact('menus'));
    }
}
