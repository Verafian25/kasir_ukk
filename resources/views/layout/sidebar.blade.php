<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Nav Item - Charts -->

    @if (session('user')->level == 'kasir')
        <li class="nav-item">
            <a class="nav-link" href="/pelanggan">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Pelanggan</span></a>
        </li>
    @endif


    <!-- Nav Item - Tables -->
    @if (session('user')->level == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/pengguna">
                <i class="fas fa-fw fa-table"></i>
                <span>User</span></a>
        </li>
    @endif



    <!-- Nav Item - Tables -->

    <li class="nav-item">
        <a class="nav-link" href="/produk">
            <i class="fas fa-fw fa-table"></i>
            <span>Produk</span></a>
    </li>


    <!-- Nav Item - Tables -->

    @if (session('user')->level == 'kasir')
        <li class="nav-item">
            <a class="nav-link" href="/penjualan">
                <i class="fas fa-fw fa-table"></i>
                <span>Penjualan</span></a>
        </li>
    @endif

    <!-- Nav Item - Tables -->
    @if (session('user')->level == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/laporanpenjualan">
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan penjualan</span></a>
        </li>
    @endif



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
