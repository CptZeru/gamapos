<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class DashboardController extends Controller
{
    public function index(){
        $navActive = "Dashboard";
        Storage::disk('local')->put('navActive',$navActive);
        return view('dashboard');
    }
}
