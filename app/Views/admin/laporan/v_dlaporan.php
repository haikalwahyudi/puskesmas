<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Laporan</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title float-right">
                            <select class="custom-select btn bg-teal" onChange="document.location.href=this.options[this.selectedIndex].value;">
                                <option value="">--Pilih Bulan--</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/01">Januari</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/02">Februari</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/03">Maret</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/04">April</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/05">Mei</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/06">Juni</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/07">Juli</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/08">Agustus</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/09">September</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/10">Oktober</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/11">Nopember</option>
                                <option value="<?= base_url(); ?>/puskesmas/laporanBy/12">Desember</option>
                            </select>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped table-sm text-center responsive nowrap table-hover" id="example1" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Antrian</th>
                                    <th>Poli Tujuan</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>No Pendaftaran</th>
                                    <th>NIK</th>
                                    <th>Asuransi</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Tanggal Lahir</th>
                                    <th>Pembayaran</th>
                                    <!-- <th>Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $d) {
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['no_antrian']; ?></td>
                                        <td><?= $d['nm_poli']; ?></td>
                                        <td><?= $d['tgl_kunjungan']; ?></td>
                                        <td><?= $d['no_pendaftaran']; ?></td>
                                        <td><?= $d['nik']; ?></td>
                                        <td><?= $d['kategori']; ?></td>
                                        <td><?= $d['nm_psn']; ?></td>
                                        <td><?= $d['jk']; ?></td>
                                        <td><?= $d['tempat_lahir']; ?>, <?= $d['tanggal_lahir']; ?></td>
                                        <td><?= $d['pembayaran']; ?></td>
                                        <!-- <td>
                                            <a href="<?= base_url() ?>/Puskesmas/cektaklaporan/<?= $d['no_pendaftaran']; ?>" class="btn btn-primary"><i class="fa fa-print"></i></a>
                                        </td> -->
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.content-header -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endsection(); ?>