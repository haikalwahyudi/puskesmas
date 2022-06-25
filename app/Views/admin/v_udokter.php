<?= $this->extend('layout/v_template') ?>

<?= $this->section('isi'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Data Dokter</h1>
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
                        <?= session()->getFlashdata('simpan'); ?> <a href="<?= base_url(); ?>/puskesmas/ddokter">Lihat data</a>
                    </div>
                <?php } ?>
                <!-- Alert -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url(); ?>/puskesmas/udokterAksi" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" value="<?= $data->nm_dokter; ?>" required>
                                <input type="hidden" name="kd_dokter" value="<?= $data->kd_dokter; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Spesialis</label>
                                <select class="custom-select rounded-0" name="spesialis" id="exampleSelectRounded0" required>
                                    <option>- Pilih -</option>
                                    <?php foreach ($dpoli as $dp) { ?>
                                        <option value="<?= $dp->kd_poli; ?>" <?php if ($dp->kd_poli == $data->kd_poli) {
                                                                                    echo 'selected';
                                                                                } ?>><?= $dp->nm_poli; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="jk" <?php if ($data->jk == "Laki-Laki") {
                                                                                                                        echo 'checked';
                                                                                                                    } ?> value="Laki-Laki">
                                    <label for="customRadio1" class="custom-control-label" required>Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="jk" <?php if ($data->jk == "Perempuan") {
                                                                                                                        echo 'checked';
                                                                                                                    } ?> value="Perempuan">
                                    <label for="customRadio2" class="custom-control-label" required>Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="number" name="nohp" class="form-control" value="<?= $data->no_hp; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Foto</label>
                                <div class="input-group">
                                    <input type="file" name="poto">
                                    <input type="hidden" value="<?= $data->poto; ?>" name="old_poto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Hari Peraktik</label>
                                <select class="custom-select rounded-0" name="hari" id="exampleSelectRounded0" required>
                                    <option>- Pilih -</option>
                                    <option value="Senin" <?php if ($data->hari_praktik == "Senin") {
                                                                echo 'selected';
                                                            } ?>>Senin</option>
                                    <option value="Selasa" <?php if ($data->hari_praktik == "Selasa") {
                                                                echo 'selected';
                                                            } ?>>Selasa</option>
                                    <option value="Rabu" <?php if ($data->hari_praktik == "Rabu") {
                                                                echo 'selected';
                                                            } ?>>Rabu</option>
                                    <option value="Kamis" <?php if ($data->hari_praktik == "Kamis") {
                                                                echo 'selected';
                                                            } ?>>Kamis</option>
                                    <option value="Jum'at" <?php if ($data->hari_praktik == "Jum'at") {
                                                                echo 'selected';
                                                            } ?>>Jum'at</option>
                                    <option value="Sabtu" <?php if ($data->hari_praktik == "Sabtu") {
                                                                echo 'selected';
                                                            } ?>>Sabtu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Jam</label>
                                <select class="custom-select rounded-0" name="jam" id="exampleSelectRounded0" required>
                                    <option>- Pilih -</option>
                                    <?php foreach ($djadwal as $dj) { ?>
                                        <option value="<?= $dj->id; ?>" <?php if ($dj->id == $data->id) {
                                                                            echo 'selected';
                                                                        } ?>><?= $dj->jam; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" cols="30" rows="10"><?= $data->alamat; ?></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            <a href="<?= base_url(); ?>/puskesmas/ddokter" class="btn btn-danger">Batal</a>
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