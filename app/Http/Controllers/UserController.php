<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use Storage;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class UserController extends Controller
{
    public function LoginIndex(){
        return view('auth.login');
    }
    
    public function LoginPost(Request $request){
        $myBody['email']=$request->input('email');
        $myBody['password']=$request->input('password');
        $url=env('API_URL').'/penjual/login';
        $client = new Client();
        try{
            $requestApi = $client->post($url, ['form_params'=>$myBody]);
            $response = $requestApi->getBody(true);
            $responseArray = json_decode($response, true);
            Session::put('token', $responseArray['user']['token']);
            Session::put('name', $responseArray['user']['name']);
            Session::put('level', $responseArray['user']['level']);
            Session::put('nohp', $responseArray['user']['no_telepon']);
            Session::put('saldo', $responseArray['user']['saldo']);
            Session::save();
            $navActive = "Dashboard";
            Storage::disk('local')->put('navActive',$navActive);
            return Redirect::route('dashboard')->with($responseArray);
        }catch(ClientException $exception){
            $response = json_decode($exception->getResponse()->getBody(true), true);
            echo "<script>console.log('".$response['status']."')</script>";
        }
    }

    public function logout(){
        Session::flush();
        $url=env('API_URL').'/pembeli/logout';
        $client = new Client();
        $requestApi = $client->get($url);
        $response = $requestApi->getBody(true);
        $responseArray = json_decode($response, true);
        return Redirect::route('login')->with($responseArray);
    }

    public function ListToko(){
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
        $navActive = "Buka Toko";
        Storage::disk('local')->put('navActive',$navActive);
        return view('openStores', compact('locations'));
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

    public function UserSettings(){
        $url=env('API_URL').'/penjual/detail';
        $token = Session::get('token');
        $headers = [
            'Authorization' => 'Bearer ' . $token,        
            'Accept'        => 'application/json',
        ];
        $client = new Client();
        $requestApi = $client->get($url, ['headers'=>$headers]);
        $response = $requestApi->getBody(true);
        $responseArray = json_decode($response, true);
        $userDetail = $responseArray['result'];
        $navActive = "Pengaturan";
        Storage::disk('local')->put('navActive',$navActive);
        return view('settings', compact('userDetail'));
    }
}
