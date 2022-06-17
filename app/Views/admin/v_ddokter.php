<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Dokter</h1>
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
                        <h3 class="card-title">
                            <a href="<?= base_url(); ?>/puskesmas/tdokter" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped text-center responsive nowrap table-hover" width="100%">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <th>Kode Dokter</th>
                                    <th>Nama Dokter</th>
                                    <th>Spesialis</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Hp</th>
                                    <th>Poto</th>
                                    <th>Hari Peraktik</th>
                                    <th>Jam</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                    foreach ($data as $d) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $d->kd_dokter; ?></td>
                                    <td><?= $d->nm_dokter; ?></td>
                                    <td><?= $d->kd_poli; ?></td>
                                    <td><?= $d->jk; ?></td>
                                    <td><?= $d->no_hp; ?></td>
                                    <td><?= $d->poto; ?></td>
                                    <td><?= $d->hari_praktik; ?></td>
                                    <td><?= $d->id; ?></td>
                                    <td><?= $d->alamat; ?></td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                        <a href="<?= base_url(); ?>/puskesmas/udokter" class="btn btn-warning btn-sm">Ubah</a>
                                    </td>
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