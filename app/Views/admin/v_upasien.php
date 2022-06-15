<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Data Pasien</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="jk" checked>
                                    <label for="customRadio1" class="custom-control-label">Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="jk">
                                    <label for="customRadio2" class="custom-control-label">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="text" name="umur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamay" class="form-control" cols="30" rows="10"></textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            <a href="<?= base_url(); ?>/puskesmas/dpasien" class="btn btn-danger">Batal</a>
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