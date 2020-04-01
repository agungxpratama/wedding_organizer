<body>
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/') ?>"><i class="fas fa-fw fa-table"></i>Dashboard</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Data</a>
                            <div id="submenu-2" class="collapse submenu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('admin/datakon') ?>">Data Konsumen <span class="badge badge-secondary">New</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('admin/dataven') ?>">Data Vendor</a>
                                    </li>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Kelola</a>
                            <div id="submenu-4" class="collapse submenu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('admin/kelkon') ?>"> Kategori Vendor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('admin/kelven') ?>"> Validasi Vendor</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="<?= base_url('admin/ad_pesanan') ?>"><i class="fa fa-fw fa-user-circle"></i>Pesanan</a>
                            <div id="submenu-1" class="collapse submenu">

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/ad_pemesanan') ?>"><i class="fas fa-fw fa-table"></i>Pemesanan</a>

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->