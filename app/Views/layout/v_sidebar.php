<aside class="main-sidebar sidebar-dark-primary elevation-4">
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
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/ddokter" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Dokter
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
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
                    <a href="<?= base_url(); ?>/puskesmas/dpendaftaran" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pendaftaran
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
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/druangan" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Ruang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/dpengguna" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/login/logout" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>