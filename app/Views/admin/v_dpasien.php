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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?= base_url(); ?>/puskesmas/tpasien" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped text-center responsive nowrap table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Pasien</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
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
                                    <td><?= $d->kd_psn; ?></td>
                                    <td><?= $d->nm_psn; ?></td>
                                    <td><?= $d->jk; ?></td>
                                    <td><?= $d->usia; ?></td>
                                    <td><?= $d->nohp; ?></td>
                                    <td><?= $d->alamat; ?></td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
                                        <a href="<?= base_url(); ?>/puskesmas/upasien" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
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