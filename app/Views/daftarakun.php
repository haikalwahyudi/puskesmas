<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <?php if (session()->getFlashdata('Berhasil')) { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                <?= session()->getFlashdata('Berhasil'); ?>
            </div>
        <?php } ?>
        <div class="register-logo">
            Daftar Akun
        </div>

        <div class="card">
            <div class="card-body register-card-body">

                <form action="<?= base_url(); ?>/puskesmas/daftarAkunAksi" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="jk" value="Laki-Laki" checked>
                            <label for="customRadio1" class="custom-control-label">Laki - Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="jk" value="Perempuan">
                            <label for="customRadio2" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nik" placeholder="NIK" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-file"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-marker"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-location-arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="nohp" placeholder="No Handphone" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <div class="col-6">
                            <a href="<?= base_url(); ?>/puskesmas" class="btn btn-danger btn-block">Kembali</a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/template/dist/js/adminlte.min.js"></script>
</body>

</html>