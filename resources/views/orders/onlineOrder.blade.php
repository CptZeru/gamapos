@extends('layouts.master')

@section('title')
    <title>Pesanan Online</title>
@endsection

@section('judulkonten')
    <!-- <h1 class="m-0 text-dark">Pesanan Online</h1> -->
@endsection

@section('breadcrumbs')
    <!-- <li class="breadcrumb-item active">Pesanan Online</li> -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row ml-4 mr-4">
            <div class="col-12">
            @component('components.card')
                    <div class="row">
                        <div class="col-auto align-content-center">
                            <h3 class="font-weight-bold">Pilih Toko</h3>
                        </div>
                        <div class="col">
                            <input class="w-100 form-control" type="text" id="tokoSearch" placeholder="Cari Toko">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                        <a href="/daftarpesanan">
                        @component('components.card')
                                    <div class="row">
                                        <div class="col-4 m-0">
                                            <img src="https://www.jaipuriaschoolsbanaras.in/parao/wp-content/uploads/2016/11/blank-img.jpg" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="col mr-0">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="nomorPesanan font-weight-bold text-success">3 Pesanan Online</h5>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-0"> Kantin Sekolah Vokasi UGM <br> Gedung SEKIP 1, UGM, Yogyakarta </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                                </a>
                            </div>
                            <div class="col-6">
                            <a href="/daftarpesanan">
                            @component('components.card')
                                    <div class="row">
                                        <div class="col-4 m-0">
                                            <img src="https://www.jaipuriaschoolsbanaras.in/parao/wp-content/uploads/2016/11/blank-img.jpg" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="col mr-0">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="nomorPesanan font-weight-bold text-success">2 Pesanan Online</h5>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="mb-0"> Kantin Sekolah Vokasi UGM <br> Gedung SEKIP 1, UGM, Yogyakarta </p>
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