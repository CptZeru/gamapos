@extends('layouts.master')

@section('title')
    <title>K-POS | Buka Toko</title>
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
                    @foreach($locations as $lokasi)
                        <div class="col-6 search-cards">
                                @component('components.card')
                                    <div class="row">                                    
                                        <div class="col ml-3 mr-0">
                                            <div class="row border-bottom">
                                                <div class="col">
                                                    <h6 class="nomorPesanan font-weight-bold">{{$lokasi['nama']}}</h6>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group float-right">
                                                        <div class="custom-control custom-switch custom-switch-on-success">
                                                            <input type="checkbox" checked="checked" disabled class="custom-control-input" id="customSwitch3">
                                                            <label class="custom-control-label" for="customSwitch3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p> Nama Toko : {{$lokasi['nama']}}</p>
                                                    <p> Kota : {{$lokasi['deskripsi']}}</p>
                                                    <p> Nomor Telepon : {{Session::get('nohp')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                            </div>
                    
                    @endforeach
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#tokoSearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                    $(".search-cards").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
    </script>
@endsection