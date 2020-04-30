@extends('layouts.master')

@section('title')
    <title>Detil Transaksi</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @component('components.card')
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('order.riwayat') }}" class="text-reset">
                                <h5 class="font-weight-bold"> <i class="fa fa-arrow-left"></i> Detail Pesanan</h5>
                            </a>
                        </div>
                        <div class="col">
                            <h5 class="float-right font-weight-light"> <i class="fa fa-undo-alt"></i> Batalkan Pesanan </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @component('components.card')
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold">Rincian Belanja</p>
                                </div>
                            </div>
                            <br>
                            <div class="row border-bottom">
                                <div class="col-auto">
                                    <p class="font-weight-bold">2x</p>
                                </div>
                                <div class="col mb-2">
                                    <p class="font-weight-bold">Air Mineral</p>
                                    <a href="#" class="">EDIT</a>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold">Rp.6.000</p>
                                </div>
                            </div>
                            <div class="row border-bottom mt-2">
                                <div class="col-auto">
                                    <p class="font-weight-bold">1x</p>
                                </div>
                                <div class="col mb-2">
                                    <p class="font-weight-bold">Nasi Ayam Geprek</p>
                                    <p class="font-weight-light">Cabe 0 </p>
                                    <a href="#" class="">EDIT</a>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold">Rp.15.000</p>
                                </div>
                            </div>
                            <div class="row border-bottom mt-2">
                                <div class="col-auto">
                                    <p class="font-weight-bold">1x</p>
                                </div>
                                <div class="col mb-2">
                                    <p class="font-weight-bold">Kerupuk Udang</p>
                                    <a href="#" class="">EDIT</a>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold">Rp.3.000</p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <h5 class="font-weight-bold">Subtotal</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-weight-bold float-right">Rp. 24.000</h5>
                                </div>
                            </div>
                            @endcomponent
                        </div>
                        <div class="col">
                        @component('components.card')
                            <div class="row">
                                <div class="col-12">
                                    <p class="font-weight-bold text-center">Masih dalam proses</p>
                                </div>
                            </div>
                            <br>                    
                            <br>                    
                            <br>                    
                            <br>                    
                            <br>                    
                            <br>                    
                            <br>                    
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <p class="font-weight-bold text-center">Masih dalam proses</p>
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