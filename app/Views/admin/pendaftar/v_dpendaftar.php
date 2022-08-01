<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h5 class="m-0">Data kunjungan hari ini tanggal <?= date('Y-m-d', time() + (60 * 60 * 13)) ?></h5>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?= base_url(); ?>/puskesmas/tdokter" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        </h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Poli Tujuan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Asuransi</th>
                                    <th>No BPJS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $d) {
                                    if ($d['tgl_kunjungan'] >= date('Y-m-d', time() + (60 * 60 * 13)) && $d['tgl_kunjungan'] <= date('Y-m-d', time() + (60 * 60 * 13))) {
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $d['nm_psn'] ?></td>
                                            <td><?= $d['nm_poli'] ?></td>
                                            <td><?= $d['jk'] ?></td>
                                            <td><?= $d['kategori'] ?></td>
                                            <td><?= $d['pembayaran'] ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>/Puskesmas/cetakdaftar/<?= $d['no_pendaftaran']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-6">
                <h5 class="m-0">Data kunjungan besok tanggal <?= date('Y-m-d', time() + (60 * 60 * 26)) ?></h5>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?= base_url(); ?>/puskesmas/tdokter" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        </h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example22" class="table table-bordered table-sm table-striped">
                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Poli Tujuan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Asuransi</th>
                                    <th>No BPJS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $d) {
                                    if ($d['tgl_kunjungan'] >= date('Y-m-d', time() + (60 * 60 * 26)) && $d['tgl_kunjungan'] <= date('Y-m-d', time() + (60 * 60 * 26))) {
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $d['nm_psn'] ?></td>
                                            <td><?= $d['nm_poli'] ?></td>
                                            <td><?= $d['jk'] ?></td>
                                            <td><?= $d['kategori'] ?></td>
                                            <td><?= $d['pembayaran'] ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>/Puskesmas/cetakdaftar/<?= $d['no_pendaftaran']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- ./col -->
        </div>

        <div class="row mb-2">
            <div class="col-sm-6">
                <h5 class="m-0">DATA KUNJUNGAN POLI</h5>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?= base_url(); ?>/puskesmas/tdokter" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        </h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example22" class="table table-bordered table-sm table-striped">
                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Nama Poli</th>
                                    <!-- <th>Pengunjung Bulan ini</th> -->
                                    <th>Pengunjung Hari ini</th>
                                    <!-- <th>Aksi</th> -->
                                </tr>

                            </thead>
                            
                            <tbody>
                                <?php
                                $no = 1;
                                // foreach ($data as $d) {
                                //     if ($d['tgl_kunjungan'] >= date('Y-m-d', time() + (60 * 60 * 26)) && $d['tgl_kunjungan'] <= date('Y-m-d', time() + (60 * 60 * 26))) {
                                foreach ($dpoli as $dp) {
                                    $jm=0;

                                    foreach ($data as $d) {
                                        if ($d['tgl_kunjungan'] >= date('Y-m-d', time() + (60 * 60 * 13)) && $d['kd_poli'] == $dp->kd_poli) {
                                            $jm++;
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $dp->nm_poli ?></td>
                                        <!-- <td>30</td> -->
                                        <td><?= $jm; ?></td>
                                           <!--  <td>
                                                <a href="<?= base_url(); ?>/Puskesmas/cetakdaftar/<?= $d['no_pendaftaran']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i></a>
                                            </td> -->
                                        </tr>
                                        <?php
                                    }
                                // }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <?= $this->endsection(); ?>