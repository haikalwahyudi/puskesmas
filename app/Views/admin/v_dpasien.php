<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pasien</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Alert -->
                <?php if (session()->getFlashdata('hapus')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Pemberitahuan</h5>
                        <?= session()->getFlashdata('hapus'); ?>
                    </div>
                <?php } elseif (session()->getFlashdata('ubah')) { ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Pemberitahuan</h5>
                        <?= session()->getFlashdata('ubah'); ?>
                    </div>
                <?php } ?>
                <!-- Alert -->
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?= base_url(); ?>/puskesmas/tpasien" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        </h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p><a href="<?= base_url(); ?>/Puskesmas/cetakdpsn" class="btn btn-secondary" target="_blank"><i class="fa fa-print"></i> Cetak</a></p>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Pasien</th>
                                    <th>Nama Pasien</th>
                                    <th>NIK</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Kelurahan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Hp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $d) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d->kd_psn; ?></td>
                                        <td><?= $d->nm_psn; ?></td>
                                        <td><?= $d->nik; ?></td>
                                        <td><?= $d->tempat_lahir; ?></td>
                                        <td><?= $d->tanggal_lahir; ?></td>
                                        <td><?= $d->kelurahan; ?></td>
                                        <td><?= $d->jk; ?></td>
                                        <td><?= $d->nohp; ?></td>
                                        <!-- <td>
                                            <a href="<?= base_url() ?>/puskesmas/hpasienAksi/<?= $d->kd_psn; ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini!')"><i class="fa fa-trash"></i></a>
                                            <a href="<?= base_url(); ?>/puskesmas/upasien/<?= $d->kd_psn; ?>" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
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