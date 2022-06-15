<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Data Pengguna</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url(); ?>/puskesmas/tpengguna_aksi" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <input type="text" name="nama_pengguna" class="form-control" value="<?= $dp['Nama_user']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $dp['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="jk" <?php if ($dp['Jenis_kelamin'] == "Laki-Laki") {
                                                                                                                        echo 'checked';
                                                                                                                    } ?> value="Laki-Laki">
                                    <label for="customRadio1" class="custom-control-label">Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="jk" <?php if ($dp['Jenis_kelamin'] == "Perempuan") {
                                                                                                                        echo 'checked';
                                                                                                                    } ?> value="Perempuan">
                                    <label for="customRadio2" class="custom-control-label">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="number" name="nohp" class="form-control" value="<?= $dp['No_hp']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="<?= $dp['password']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Level">Level</label>
                                <select name="level" class="form-control" required>
                                    <option value="">-Pilih-</option>
                                    <option value="Admin">Admin</option>
                                    <option value="pasien">pasien</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                            <a href="<?= base_url(); ?>/puskesmas/dpengguna" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.content-header -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endsection(); ?>