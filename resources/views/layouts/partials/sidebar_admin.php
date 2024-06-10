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
                <li class="nav-item active">
                    <a href="/admin/dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
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
                                <a href="/admin/master_date_user">
                                    <span class="sub-item">Pengguna</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/admin/master_data_kategori">
                        <i class="fas fa-tag"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/master_data_produk">
                        <i class="fas fa-box"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Informasi</h4>
                </li>
                <li class="nav-item">
                    <a href="/admin/buat_notifikasi">
                        <i class="fas fa-bell"></i>
                        <p>Notifikasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/kirim_email">
                        <i class="fas fa-envelope"></i>
                        <p>Kirim Email</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>