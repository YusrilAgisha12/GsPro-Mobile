<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/dasboard_admin') ?>">
                    <i class="fas fa-user"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_barang') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Semua Produk</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data-data Produk</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data :</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori/data_makanan') ?>">Data Makanan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori/data_minuman') ?>">Data Minuman</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori/data_perlengkapan_sekolah') ?>">Data Perlengkapan Sekolah</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori/data_obat_obatan') ?>">Obat-Obatan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori/data_perlengkapan_rumah') ?>">Data Perlengkapan Rumah</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori/data_ice_cream') ?>">Data Es Krim</a>
                    </div>
                </div>

                <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoices</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <?php echo form_open('data_barang/search') ?>
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" autofocus placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Cari</button>
                            </div>
                            <?php form_close() ?>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form method="post" class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <?php echo form_open('data_barang/search') ?>
                                        <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">Cari
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                            <?php form_close() ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($this->session->userdata('nama')) { ?>
                                <li>
                                    <div><?php echo $this->session->userdata('nama') ?></div>
                                </li>
                                <li class="ml-2"><?php echo anchor('auth/logout', 'Logout'); ?></li>
                            <?php } else { ?>
                                <li><?php echo anchor('auth/login', 'Login'); ?></li>
                            <?php } ?>
                        </ul>

                    </ul>

                </nav>
                <!-- End of Topbar -->