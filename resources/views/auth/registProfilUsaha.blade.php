<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
                        <h1 class="text-center">K-Jur Penjual</h1>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-sm-12 p-0 pl-5 pr-5">
                        @component('components.card')
                        <div class="row">
                            <div class="col-sm-12 p-0">
                                <h3 class="font-weight-bold text-center">Lengkapi Profil Usaha</h3>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-12 p-0">
                                <h3 class="font-weight-bold text-center">Lengkapi Profil Usaha</h3>
                            </div>
                        </div>
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
