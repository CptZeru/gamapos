@extends('layouts.master')

@section('title')
    <title>Daftar Pesanan Online</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row ml-4 mr-4">
            <div class="col-12">
            @component('components.card')
                    <div class="row">
                        <div class="col-auto align-content-center">
                            <h3 class="font-weight-bold">Daftar Pesanan Online</h3>
                        </div>
                        <div class="col">
                            <input class="w-100 form-control" type="text" id="tokoSearch" placeholder="Cari Toko">
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-12">
                            <table class="table font-weight-bold">
                                <thead>
                                    <tr>
                                    <th style="width: 10px"><input type="checkbox"></th>
                                    <th>Nama Pemesan</th>
                                    <th>Lokasi</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Fritzent</a></td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Meja 5, Kantin KOMSI</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Rp. 28.000</a>
                                        </td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Menu lengkap</a></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 m-0 p-0">
                                                    <a href="#" class="text-secondary">Hapus</a>
                                                </div>
                                                <div class="col-6 m-0 p-0">
                                                    <div class="border border-success m-0 p-0 text-center rounded">
                                                        <a href="#" class="text-success">Terima</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Jeshvers</a></td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Meja 5, Kantin KOMSI</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Rp. 8.000</a>
                                        </td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Menu lengkap</a></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 m-0 p-0">
                                                    <a href="#" class="text-secondary">Hapus</a>
                                                </div>
                                                <div class="col-6 m-0 p-0">
                                                    <div class="border border-success m-0 p-0 text-center rounded">
                                                        <a href="#" class="text-success">Terima</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Ayu</a></td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Meja 5, Kantin KOMSI</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Rp. 10.000</a>
                                        </td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Menu lengkap</a></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 m-0 p-0">
                                                    <a href="#" class="text-secondary">Hapus</a>
                                                </div>
                                                <div class="col-6 m-0 p-0">
                                                    <div class="border border-success m-0 p-0 text-center rounded">
                                                        <a href="#" class="text-success">Terima</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Agan</a></td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Meja 5, Kantin KOMSI</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Rp. 28.000</a>
                                        </td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-danger">1 Menu tidak lengkap</a></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 m-0 p-0">
                                                    <a href="#" class="text-secondary">Hapus</a>
                                                </div>
                                                <div class="col-6 m-0 p-0">
                                                    <div class="border border-success m-0 p-0 text-center rounded">
                                                        <a href="#" class="text-success">Terima</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Fritzent</a></td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Meja 5, Kantin KOMSI</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">Rp. 20.000</a>
                                        </td>
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">Menu lengkap</a></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 m-0 p-0">
                                                    <a href="#" class="text-secondary">Hapus</a>
                                                </div>
                                                <div class="col-6 m-0 p-0">
                                                    <div class="border border-success m-0 p-0 text-center rounded">
                                                        <a href="#" class="text-success">Terima</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
@endsection