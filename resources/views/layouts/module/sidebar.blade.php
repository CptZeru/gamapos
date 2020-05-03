<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">K-POS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

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
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('order.kasir') }}" class="nav-link">
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Kasir
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('order.riwayat') }}" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
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
            <a href="/store" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Buka Toko
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/items" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Kelola Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('order.onlineOrder') }}" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Pesanan Online
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
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