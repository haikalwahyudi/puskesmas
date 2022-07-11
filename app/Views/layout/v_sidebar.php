<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #18978F;">
    <!-- Brand Logo -->
    <span class="brand-link">
        <img src="<?= base_url(); ?>/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Puskesmas</span>
    </span>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/template/dist/img/default.png" class="img-circle elevation-2" alt="User Image">
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
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
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
                    </ul>
                </li>
                <li class="nav-item">

                    <a href="<?= base_url(); ?>/Puskesmas/dpendaftar" class="nav-link">
                        <i class="nav-icon fas fa-file-contract"></i>
                        <p>
                            Pendaftar
                            <?php
                            $db = \Config\Database::connect();

                            $query = $db->query("SELECT * FROM poli, pasien, pendaftaran WHERE poli.kd_poli = pendaftaran.kd_poli && pasien.kd_psn = pendaftaran.kd_psn");

                            $data = $query->getResultArray();
                            // dd($d['tgl_kunjungan']);
                            $no = 0;
                            foreach ($data as $d) {
                                if ($d['tgl_kunjungan'] >= date('Y-m-d', time() + (60 * 60 * 13)) && $d['tgl_kunjungan'] <= date('Y-m-d', time() + (60 * 60 * 13))) {
                                    $no++;
                                }
                            }
                            ?>
                            <span class="badge badge-danger"><?= $no; ?></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/Puskesmas/dlaporan" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-header">DATA</li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/puskesmas/dpendaftaran" class="nav-link">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <i class="fa-solid fa-file-signature"></i>
                        <p>
                            Pendaftaran
                        </p>
                    </a>
                </li> -->
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
                    <a href="<?= base_url(); ?>/login/logout" class="btn btn-success" onclick="return confirm('Yaking ingin keluar?')">
                        <i class="nav-icon fa fa-arrow-left"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>