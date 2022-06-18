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
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url(); ?>/puskesmas/tdokterAksi" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Spesialis</label>
                                <select class="custom-select rounded-0" name="spesialis" id="exampleSelectRounded0" required>
                                    <option>- Pilih -</option>
                                    <option>Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="jk" checked value="Laki-Laki">
                                    <label for="customRadio1" class="custom-control-label" required>Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="jk" value="Perempuan">
                                    <label for="customRadio2" class="custom-control-label" required>Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="number" name="nohp" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="poto" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Hari Peraktik</label>
                                <select class="custom-select rounded-0" name="hari" id="exampleSelectRounded0" required>
                                    <option>- Pilih -</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Jam</label>
                                <select class="custom-select rounded-0" name="jam" id="exampleSelectRounded0" required>
                                    <option>- Pilih -</option>
                                    <option value="09:00 - 15:00">09:00 - 15:00</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
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