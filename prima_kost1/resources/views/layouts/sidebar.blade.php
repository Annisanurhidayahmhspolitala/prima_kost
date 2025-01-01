<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a class="brand-link">
    <img src="{{ asset('assets/') }}/img/logo1.jpg" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">KOST PRIMA</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="{{ asset('assets/') }}/img/12.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
            <a>{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class -->
            <li class="nav-header">PILIHAN MENU</li>
            <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link {{ Route::is('beranda') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Beranda</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('akun.tampil') }}" class="nav-link {{ Route::is('akun.tampil') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Kelola Akun</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('penghuni.tampil') }}" class="nav-link {{ Route::is('penghuni.tampil') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Kelola Penghuni</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kamar.tampil') }}" class="nav-link {{ Route::is('kamar.tampil') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-bed"></i>
                    <p>Kelola Kamar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tagihan.tampil') }}" class="nav-link {{ Route::is('tagihan.tampil') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-invoice"></i>
                    <p>Kelola Tagihan</p>
                </a>
        </li>
            <li class="nav-item">
                <a href="{{ route('riwayat_pembayaran.riwayat') }}" class="nav-link {{ Route::is('riwayat_pembayaran.riwayat') ? 'active' : '' }}">
                <i class="nav-icon fas fa-history"></i>
                <p>Riwayat Pembayaran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.ratings.index') }}" class="nav-link {{ Route::is('admin.ratings.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-star"></i>
                    <p>Ulasan Penghuni</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tpk.tampil') }}" class="nav-link {{ Route::is('tpk.tampil') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-calculator"></i>
                    <p>Tpk</p>
                </a>
            </li>
            <li class="nav-item">
                <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="nav-link p-0">
                    @csrf
                    <button type="submit" class="btn nav-link btn-danger d-flex align-items-center text-start text-white">
                        <i class="nav-icon fas fa-sign-out-alt text-white"></i>
                        <p>Logout</p>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
