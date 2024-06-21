<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu-->
    <div class="sidebar-heading">
        Home
    </div>
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if (uri_string() == 'admin') echo 'active'; ?>">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if (uri_string() == 'buku/kategori' || strpos(uri_string(), 'buku/ubahkategori') !== false) echo 'active'; ?>">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fa fa-fw fa-list"></i>
            <span>Kategori Buku</span>
        </a>
    </li>

    <li class="nav-item <?php if (uri_string() == 'buku' || strpos(uri_string(), 'buku/ubahBuku') !== false) echo 'active'; ?>">
        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span>Data Buku</span></a>
    </li>
    <li class="nav-item <?php if (uri_string() == 'user/anggota' || strpos(uri_string(), 'user/ubahuser') !== false) echo 'active'; ?>">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Anggota</span></a>
    </li>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('autentifikasi/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar --   > 