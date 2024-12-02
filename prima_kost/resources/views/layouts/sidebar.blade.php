<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/') }}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KOST PRIMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/') }}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Akun</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-header">PILIHAN MENU</li>
            <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link {{ Route::is('beranda')? 'active': ''}}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('akun.tampil') }}" class="nav-link {{ Route::is('akun.tampil')? 'active': ''}}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Kelola Akun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penghuni.tampil') }}" class="nav-link {{ Route::is('penghuni.tampil')? 'active': ''}}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Kelola Penghuni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kamar.tampil') }}" class="nav-link {{ Route::is('kamar.tampil')? 'active': ''}}">
                  <i class="nav-icon fas fa-bed"></i>
                  <p>Kelola Kamar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tagihan.tampil') }}" class="nav-link {{ Route::is('tagihan.tampil')? 'active': ''}}">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>Kelola Tagihan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('riwayat_pembayaran.riwayat') }}" class="nav-link {{ Route::is('riwayat_pembayaran.riwayat')? 'active': ''}}">
                  <i class="nav-icon fas fa-history"></i>
                  <p>Riwayat Pembayaran</p>
                </a>
              </li>
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>