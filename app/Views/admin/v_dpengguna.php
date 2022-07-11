<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pengguna</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <?php if (session()->getFlashdata('hapus')) { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Pemberitahuan!</h5>
                <?= session()->getFlashdata('hapus'); ?>
            </div>
        <?php } elseif (session()->getFlashdata('ubah')) { ?>
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Pemberitahuan!</h5>
                <?= session()->getFlashdata('ubah'); ?>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?= base_url(); ?>/puskesmas/tpengguna" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Pengguna</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Hp</th>
                                    <th>Password</th>
                                    <th>Level</th>
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
                                        <td><?= $d['Kode_user']; ?></td>
                                        <td><?= $d['Nama_user']; ?></td>
                                        <td><?= $d['email']; ?></td>
                                        <td><?= $d['Jenis_kelamin']; ?></td>
                                        <td><?= $d['No_hp']; ?></td>
                                        <td><?= $d['password']; ?></td>
                                        <td><?= $d['level']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>/Puskesmas/hpengguna/<?= $d['Kode_user']; ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            <a href="<?= base_url(); ?>/puskesmas/upengguna/<?= $d['Kode_user']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
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