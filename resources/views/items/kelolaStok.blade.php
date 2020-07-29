@extends('layouts.master')

@section('title')
    <title>K-POS | Kelola Stok</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row ml-4 mr-4">
            <div class="col-12">
            @component('components.card')
                    <div class="row">
                        <div class="col-auto align-content-center">
                            <h3 class="font-weight-bold">Kelola Stok</h3>
                        </div>
                        <div class="col">
                            <input class="w-100 form-control" type="text" id="menuSearch" placeholder="Cari Menu">
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-12">
                            <table class="table font-weight-bold">
                                <thead>
                                    <tr>                                    
                                    <th>Nama Menu</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $menu)
                                <tr class="menu">
                                        <td><a href="{{ route('order.detailOrder') }}" class="text-dark">{{$menu['barang']}}</a></td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">{{$menu['stok']}}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.detailOrder') }}" class="text-dark">{{"Rp " . number_format($menu['harga'], 0, ",", ".")  }}</a>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col m-0 p-0">
                                                    <div class="input-group">
                                                        <input type="button" value="-" class="btn btn-danger button-minus btn-circle btn-sm" data-field="stock">
                                                        <input type="number" step="1" max="" value="{{$menu['stok']}}" name="stock" class="stock-field border-top-0 border-left-0 border-right-0 text-center">
                                                        <input type="button" value="+" class="btn btn-success button-plus btn-circle btn-sm" data-field="stock">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#menuSearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".menu").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        function incrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal)) {
                parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        function decrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal) && currentVal > 0) {
                parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        $('.input-group').on('click', '.button-plus', function(e) {
            incrementValue(e);
        });

        $('.input-group').on('click', '.button-minus', function(e) {
            decrementValue(e);
        });
    </script>
@endsection