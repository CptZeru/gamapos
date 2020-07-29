@extends('layouts.master')

@section('title')
    <title>K-POS | Kelola Produk</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
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
                                <!-- <a href="#" class="text-reset"> -->
                                @component('components.card')
                                    <div class="row">
                                        <div class="col-4 m-0">
                                            @if($lokasi['foto'])
                                                <img src="{{$lokasi['foto']}}" style="width: 100%; height: 100%;">
                                            @endif
                                            <!-- <img src="https://www.jaipuriaschoolsbanaras.in/parao/wp-content/uploads/2016/11/blank-img.jpg" style="width: 100%; height: 100%;"> -->
                                        </div>
                                        <div class="col mr-0">
                                            <div class="row border-bottom">
                                                <div class="col">
                                                    <h5 class="nomorPesanan font-weight-bold">{{$lokasi['nama']}}</h5>
                                                </div>
                                            </div>
                                            <a href="{{route('kelolaStok',['id' => $lokasi['id']])}}" class="text-reset">
                                            <div class="row border-bottom mt-1">
                                                
                                                    <div class="col-6 ">
                                                        <p class="mb-2"> Kelola Stok </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="float-right mb-2"> > </p>
                                                    </div>
                                            </div>
                                            </a>
                                            <div class="row border-bottom mt-1">
                                                <div class="col-6">
                                                    <p class="mb-2"> Kelola Menu </p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-right mb-2"> > </p>
                                                </div>
                                            </div>
                                            <div class="row border-bottom mt-1">
                                                <div class="col-6">
                                                    <p class="mb-2"> Kelola Kategori </p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="float-right mb-2"> > </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                                <!-- </a> -->
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