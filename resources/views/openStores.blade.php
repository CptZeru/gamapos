@extends('layouts.master')

@section('title')
    <title>K-POS</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row ml-4 mr-4">
            <div class="col-12">
            @component('components.card')
                    <div class="row">
                        <div class="col-12">
                            <input class="w-100 form-control" type="text" id="tokoSearch" placeholder="Cari Toko">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6">
                                @component('components.card')
                                    <div class="row">                                    
                                        <div class="col ml-3 mr-0">
                                            <div class="row border-bottom">
                                                <div class="col">
                                                    <h6 class="nomorPesanan font-weight-bold">Kantin SV</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group float-right">
                                                        <div class="custom-control custom-switch custom-switch-on-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                            <label class="custom-control-label" for="customSwitch3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p> Nama Toko : Kantin SV</p>
                                                    <p> Kota : Kota Yogyakarta</p>
                                                    <p> Nomor Telepon : +6285154575860</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                            </div>
                            <div class="col-6">
                                @component('components.card')
                                    <div class="row">                                    
                                        <div class="col ml-3 mr-0">
                                            <div class="row border-bottom">
                                                <div class="col">
                                                    <h6 class="nomorPesanan font-weight-bold">Kantin SV</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group float-right">
                                                        <div class="custom-control custom-switch custom-switch-on-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                            <label class="custom-control-label" for="customSwitch4"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p> Nama Toko : Kantin SV</p>
                                                    <p> Kota : Kota Yogyakarta</p>
                                                    <p> Nomor Telepon : +6285154575860</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                            </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
@endsection