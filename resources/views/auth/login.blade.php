<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>K-POS | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .text-teal{
      color: #11CFC5 !important;
    }
    .btn-success,
    .btn-success:active,
    .btn-success:visited,
    .btn-success:focus
    {
      background-color: #11CFC5 !important;
      border-color: #11CFC5 !important;
    }
    .btn-success:hover{
        background-color: #0faba3 !important;
        border-color: #0faba3 !important;
    }
  </style>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
    <div class="wrapper" style="background-color: #FFF;">
        <!-- <div class="content-wrapper"> -->
            <section class="content">
                <div class="row m-0 mb-5">
                    <div class="col-sm-12 p-0">
                    <h1 class="text-center"><img src="{{ asset('/images/Intersection 4.png')}}" style="width: 3%; height: 3%;"></h1>
                        <h1 class="text-center text-bold text-teal">K-Jur Penjual</h1>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-sm-6">
                        <div class="row ml-5">
                            <div class="col-sm-4">
                                <img src="{{ asset('/images/thunder.png')}}" style="width: 60%; height: 60%;">
                            </div>
                            <div class="col-sm-8">
                                <p class="text-teal font-weight-bold mb-0">Sederhana dan Cepat</p>
                                <p class="mt-0">Lakukan transaksi dengan cepat, <br/>
                                jangan biarkan pelanggan anda <br/>
                                menunggu lama dan bosan.</p>
                            </div>
                        </div>
                        
                        
                        
                        <div class="row ml-5">
                            <div class="col-sm-4">
                                <img src="{{ asset('/images/Group-699.png')}}" style="width: 60%; height: 60%;">
                            </div>
                            <div class="col-sm-8">
                                <p class="text-teal font-weight-bold mb-0">Dapat Menerima Pesanan Online</p>
                                <p class="mt-0">Terima pesanan online dengan <br/>
                                mudah dan cepat.</p>
                            </div>
                        </div>
                        <br/>
                        
                        
                        <div class="row ml-5">
                            <div class="col-sm-4">
                                <img src="{{ asset('/images/calculator.png')}}" style="width: 60%; height: 60%;">
                            </div>
                            <div class="col-sm-8">
                                <p class="text-teal font-weight-bold mb-0">Rekap Laporan Terlengkap</p>
                                <p class="mt-0">Dapatkan laporan lengkap <br/>
                                tentang performa usaha anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pr-5 pl-5">
                        @component('components.card')
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="text-center font-weight-bold">MASUK</h3>
                            </div>
                        </div>
                        <br/>
                        <form method="POST" action="{{ route('loginPost') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <label for="email" class="text-secondary mb-0">Email</label><br>
                            <div class="input-group mb-3">
                                <input name="email" type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                </div>
                                <label for="password" class="text-secondary mb-0">Kata Sandi</label><br>
                                <div class="input-group mb-3">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="col-sm-12 p-0">
                                <button type="submit" class="btn btn-success custom-btn btn-block">MASUK</button>
                            </div>
                        </form>
                        <br/>
                        <p class="text-center mb-4">
                            <a href="forgot-password.html" class="text-secondary">Lupa Kata Sandi ?</a>
                        </p>
                        <hr style="max-width:100px;border-top-width:5px;border-radius:5px;"/>
                        <p class="text-center mt-4 mb-0">
                            Belum punya akun ?<a href="/daftar" class="text-teal"> DAFTAR</a>
                        </p>
                        @endcomponent
                    </div>
                </div>
            </section>
        <!-- </div> -->
    </div>

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
