<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/images/Intersection 4.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text text-bold text-teal">K-JUR Penjual</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 pl-2 ml-1 d-flex">
        <!-- <div class="image">
          <img src="lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block text-bold"><i class="nav-icon fas fa-wallet"></i> &nbsp; Saldo &emsp; &emsp; {{"Rp " . number_format(Session::get('saldo'), 0, ",", ".")  }} &ensp;<i class="nav-icon fas fa-angle-right"></i></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- <div class="row">
          <div class="col ml-4">
            <p><img src="https://www.jaipuriaschoolsbanaras.in/parao/wp-content/uploads/2016/11/blank-img.jpg" style="width: 20px; height: 20px; border-radius: 50%;"> Saldo</p>
          </div>
          <div class="col">
            <p class="float-right mr-3">Rp. 10.000</p>
          </div>
        </div> -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link <?php if(Storage::disk('local')->get('navActive')=="Dashboard") echo "active"?>">
              <i class="nav-icon fas fa-chart-bar <?php if(Storage::disk('local')->get('navActive')=="Dashboard") echo "text-teal"?>"></i>
              <p class="<?php if(Storage::disk('local')->get('navActive')=="Dashboard") echo "text-teal"?>">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('order.kasir') }}" class="nav-link <?php if(Storage::disk('local')->get('navActive')=="Kasir") echo "active"?>">
              <i class="nav-icon fas fa-calculator <?php if(Storage::disk('local')->get('navActive')=="Kasir") echo "text-teal"?>"></i>
              <p class="<?php if(Storage::disk('local')->get('navActive')=="Kasir") echo "text-teal"?>">
                Kasir
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('order.riwayat') }}" class="nav-link <?php if(Storage::disk('local')->get('navActive')=="Riwayat") echo "active"?>">
              <i class="nav-icon fas fa-receipt <?php if(Storage::disk('local')->get('navActive')=="Riwayat") echo "text-teal"?>"></i>
              <p class="<?php if(Storage::disk('local')->get('navActive')=="Riwayat") echo "text-teal"?>">
                Riwayat Transaksi
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="/store" class="nav-link <?php if(Storage::disk('local')->get('navActive')=="Buka Toko") echo "active"?>">
              <i class="nav-icon fas fa-store <?php if(Storage::disk('local')->get('navActive')=="Buka Toko") echo "text-teal"?>"></i>
              <p class="<?php if(Storage::disk('local')->get('navActive')=="Buka Toko") echo "text-teal"?>">
                Buka Toko
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/items" class="nav-link <?php if(Storage::disk('local')->get('navActive')=="Kelola Produk") echo "active"?>">
              <i class="nav-icon fas fa-cubes <?php if(Storage::disk('local')->get('navActive')=="Kelola Produk") echo "text-teal"?>"></i>
              <p class="<?php if(Storage::disk('local')->get('navActive')=="Kelola Produk") echo "text-teal"?>">
                Kelola Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('order.onlineOrder') }}" class="nav-link <?php if(Storage::disk('local')->get('navActive')=="Pesanan Online") echo "active"?>">
              <i class="nav-icon fas fa-shopping-bag <?php if(Storage::disk('local')->get('navActive')=="Pesanan Online") echo "text-teal"?>"></i>
              <p class="<?php if(Storage::disk('local')->get('navActive')=="Pesanan Online") echo "text-teal"?>">
                Pesanan Online
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengaturan" class="nav-link <?php if(Storage::disk('local')->get('navActive')=="Pengaturan") echo "active"?>">
              <i class="nav-icon fas fa-cog <?php if(Storage::disk('local')->get('navActive')=="Pengaturan") echo "text-teal"?>"></i>
              <p class="<?php if(Storage::disk('local')->get('navActive')=="Pengaturan") echo "text-teal"?>">
                Pengaturan
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
