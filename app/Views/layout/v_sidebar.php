<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #18978F;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url(); ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Puskesmas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="text-white"><?= session()->get('nama'); ?></span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/admin" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-header">DATA MASTER</li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/ddokter" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Dokter
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/djadwal" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Jadwal Praktik
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/dpasien" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/dpoli" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Poli
                        </p>
                    </a>
                </li>
                <li class="nav-header">DATA</li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/dpendaftaran" class="nav-link">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <!-- <i class="fa-solid fa-file-signature"></i> -->
                        <p>
                            Pendaftaran
                        </p>
                    </a>
                </li>
                <li class="nav-header">DATA PENGGUNA</li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/dpengguna" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                <li class="nav-item text-center mb-3">
                    <a href="<?= base_url(); ?>/login/logout" class="btn btn-success">
                        <i class="nav-icon fa fa-arrow-left"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>