@extends('layouts.master')

@section('title')
    <title>K-POS | Pesanan Online</title>
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
                    @foreach($locations as $lokasi)
                    <div class="col-6 search-cards">
                        <a href="/daftarpesanan">
                        @component('components.card')
                                    <div class="row">
                                        <div class="col-4 m-0">
                                            <img src="{{$lokasi['foto']}}" style="width: 100%; height: 100%;">
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
                                                    <p class="mb-0"> {{$lokasi['nama']}} <br> {{$lokasi['deskripsi']}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                                </a>
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