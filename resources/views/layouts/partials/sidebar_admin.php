<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">

            <a href="" class="logo">
                <img src="/assets/logo.svg" alt="navbar brand" class="navbar-brand" height="50">
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>

        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/admin/dashboard' ? 'active' : '' ?>">
                    <a href="/admin/dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/admin/pendaftaran-seller' ? 'active' : '' ?>">
                    <a href="/admin/pendaftaran-seller">
                        <i class="fas fa-envelope"></i>
                        <p>Pendaftaran Seller</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-users"></i>
                        <p>Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/master_data_admin">
                                    <span class="sub-item">Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/master_data_seller">
                                    <span class="sub-item">Seller</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/master_data_user">
                                    <span class="sub-item">Pengguna</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/admin/master_data_kategori' ? 'active' : '' ?>">
                    <a href="/admin/master_data_kategori">
                        <i class="fas fa-tag"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/admin/master_data_produk' ? 'active' : '' ?>">
                    <a href="/admin/master_data_produk">
                        <i class="fas fa-box"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/admin/transaksi' ? 'active' : '' ?>">
                    <a href="/admin/transaksi">
                    <i class="fas fa-money-bill-wave"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Informasi</h4>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/admin/buat_notifikasi' ? 'active' : '' ?>">
                    <a href="/admin/buat_notifikasi">
                        <i class="fas fa-bell"></i>
                        <p>Buat Notifikasi</p>
                    </a>
                </li>
                <li class="nav-item <?= $_SERVER['REQUEST_URI'] == '/admin/kirim_email' ? 'active' : '' ?>">
                    <a href="/admin/kirim_email">
                        <i class="fas fa-envelope"></i>
                        <p>Kirim Email</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>