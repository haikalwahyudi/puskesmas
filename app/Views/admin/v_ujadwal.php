<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Data Jadwal</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Alert -->
                <?php if (session()->getFlashdata('simpan')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Pemberitahuan</h5>
                        <?= session()->getFlashdata('simpan'); ?> <a href="<?= base_url(); ?>/puskesmas/djadwal">Lihat data</a>
                    </div>
                <?php } ?>
                <!-- Alert -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url(); ?>/puskesmas/ujadwalAksi" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Dari Jam</label>
                                        <input type="hidden" name="id" value="<?= $data->id; ?>">
                                        <input type="text" name="jam1" class="form-control" value="<?= substr($data->jam, 0, 5); ?>" required>
                                    </div>
                                </div> <!-- row -->
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Sampai</label>
                                        <input type="text" name="jam2" class="form-control" value="<?= substr($data->jam, -5); ?>" required>
                                    </div>
                                </div> <!-- row -->
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            <a href="<?= base_url(); ?>/puskesmas/djadwal" class="btn btn-danger">Batal</a>
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