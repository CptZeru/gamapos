@extends('layouts.master')

@section('title')
    <title>K-POS</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            @component('components.card')
                    <div class="row">
                        <div class="col-8">
                            <input class="w-100 " type="text" id="tokoSearch" placeholder="Cari Toko">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                    <div class="col-6">
                            <a href="#" class="text-reset">
                            @component('components.card')
                                <div class="row">                                    
                                    <div class="col ml-3 mr-0">
                                        <div class="row">
                                            <div class="col border-bottom">
                                                <h6 class="nomorPesanan font-weight-bold">Kantin SV</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p> Nama : </p>
                                                <p> Kota : </p>
                                                <p> Nomor : </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endcomponent
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="text-reset">
                            @component('components.card')
                                <div class="row">                                    
                                    <div class="col ml-3 mr-0">
                                        <div class="row">
                                            <div class="col border-bottom">
                                                <h6 class="nomorPesanan font-weight-bold">Kantin SV</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p> Nama : </p>
                                                <p> Kota : </p>
                                                <p> Nomor : </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endcomponent
                            </a>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
@endsection