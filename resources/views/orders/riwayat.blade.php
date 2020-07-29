@extends('layouts.master')

@section('title')
    <title>K-POS | Riwayat Transaksi</title>

    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('judulkonten')
    <!-- <h1 class="m-0 text-dark">Riwayat Transaksi</h1> -->
@endsection

@section('breadcrumbs')
    <!-- <li class="breadcrumb-item active">Riwayat Transaksi</li> -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row ml-4 mr-4">
            <div class="col-4">
                @component('components.card')
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold"> Filter</h5>
                        </div>
                        <div class="col">
                            <h5 class="float-right"> Reset </h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold"> Status </h5>
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col">
                            <h6 class=""> Selesai </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="selesaiCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <h6 class=""> Belum Selesai </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="belumSelesaiCheck" class="float-right">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold"> Jenis Pesanan </h5>
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col">
                            <h6 class=""> Pesanan Offline </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="offlineCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <h6 class=""> Pesanan Online </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="onlineCheck" class="float-right">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold"> Toko </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class=""> Kantin SV UGM </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="kantinSVCheck" class="float-right">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold"> Waktu </h5>
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col">
                            <h6 class=""> Hari ini </h6>
                        </div>
                        <div class="col">
                            <input type="radio" id="hariCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row border-bottom mt-2">
                        <div class="col">
                            <h6 class=""> Minggu ini </h6>
                        </div>
                        <div class="col">
                            <input type="radio" id="mingguCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row border-bottom mt-2">
                        <div class="col">
                            <h6 class=""> Bulan ini </h6>
                        </div>
                        <div class="col">
                            <input type="radio" id="bulanCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <h6 class=""> Tahun ini </h6>
                        </div>
                        <div class="col">
                            <input type="radio" id="tahunCheck" class="float-right">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold"> Kisaran Waktu </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class=""> Pilih </h6>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-bold">13Fe-13Mar 2020 ></h6>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold"> Metode Pembayaran </h5>
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col">
                            <h6 class=""> Tunai </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="tunaiCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row border-bottom mt-2">
                        <div class="col">
                            <h6 class=""> Gamapay </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="gamaPayCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row border-bottom mt-2">
                        <div class="col">
                            <h6 class=""> LinkAja </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="linkAjaCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row border-bottom mt-2">
                        <div class="col">
                            <h6 class=""> Gopay </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="gopayCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row border-bottom mt-2">
                        <div class="col">
                            <h6 class=""> Dana </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="danaCheck" class="float-right">
                        </div>
                    </div>
                    <div class="row border-bottom mt-2">
                        <div class="col">
                            <h6 class=""> OVO </h6>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="ovoCheck" class="float-right">
                        </div>
                    </div>
                @endcomponent
            </div>
            <div class="col-8 pl-4">
                @component('components.card')
                    <div class="row">
                        <div class="col-12">
                            <input class="w-100 form-control" type="text" id="riwayatSearch" placeholder="Cari Riwayat Transaksi">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <p>22 April 2020</p>
                        </div>
                        <div class="col">
                            <p class="float-right">Rp. 203.000</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('order.detailOrder') }}" class="text-reset">
                            @component('components.card')
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="https://www.jaipuriaschoolsbanaras.in/parao/wp-content/uploads/2016/11/blank-img.jpg" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col ml-3 mr-0">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="nomorPesanan font-weight-bold">#032194213</h6>
                                            </div>
                                            <div class="col">
                                                <h5 class="total-harga float-right font-weight-bold">Rp.28.000</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p> Tunai - Oleh Fritzent </p>
                                            </div>
                                            <div class="col">
                                                <p class="waktu-pesan font-weight-light float-right"> 14.00 WIB </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                @component('components.alert', ['type'=>'success'])
                                                    Dipesan online
                                                @endcomponent
                                            </div>
                                            <div class="col">
                                                @component('components.alert', ['type'=>'warning'])
                                                    Belum selesai
                                                @endcomponent
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

@section('scripts')
    <!-- DataTables -->
    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
    $(function () {
        $("#table-riwayat").DataTable({
        "responsive": true,
        "autoWidth": true,
        });
    });
    </script>
@endsection