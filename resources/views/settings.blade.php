@extends('layouts.master')

@section('title')
    <title>Pengaturan</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row ml-4 mr-4">
            <div class="col-12">
            @component('components.card')
                    <div class="row">
                        <div class="col-12">
                            <a href="#">
                                <p class="font-weight-bold  float-right text-dark">EDIT PROFIL</p>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="font-weight-bold  mb-0">Lebah Ganteng</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="font-weight-bold text-secondary  mb-0">+6285692345623</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="font-weight-bold text-secondary  mb-0">Foodnesia | Owner</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <img class="rounded-circle float-right" src="https://www.jaipuriaschoolsbanaras.in/parao/wp-content/uploads/2016/11/blank-img.jpg" style="max-width: 100px; max-height: 100px;">
                        </div>
                    </div>
                @endcomponent
                @component('components.card')
                    <div class="row border-bottom">
                        <div class="col-6">
                            <p class="font-weight-bold">Kelola Diskon</p>
                        </div>
                        <div class="col-6">
                            <p class="text-secondary float-right">5 Aktif <span class="text-dark font-weight-bold ml-2">></span></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <p class="font-weight-bold">Kelola Pajak</p>
                        </div>
                        <div class="col-6">
                            <p class="text-secondary float-right">4 Aktif <span class="text-dark font-weight-bold ml-2">></span></p>
                        </div>
                    </div>
                @endcomponent
                @component('components.card')
                    <div class="row border-bottom">
                        <div class="col-6">
                            <p class="font-weight-bold">Kelola Printer</p>
                        </div>
                        <div class="col-6">
                            <p class="text-secondary float-right">5 Aktif <span class="text-dark font-weight-bold ml-2">></span></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <p class="font-weight-bold">Kelola Nota</p>
                        </div>
                        <div class="col-6">
                            <p class="text-secondary float-right">4 Aktif <span class="text-dark font-weight-bold ml-2">></span></p>
                        </div>
                    </div>
                @endcomponent
                @component('components.card')
                    <div class="row border-bottom">
                        <div class="col-6">
                            <p class="font-weight-bold">Lanjutan</p>
                        </div>
                        <div class="col-6">
                            <p class="font-weight-bold float-right">></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12"><a href="/login">
                            <p class="font-weight-bold text-danger">Keluar</p></a>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
@endsection