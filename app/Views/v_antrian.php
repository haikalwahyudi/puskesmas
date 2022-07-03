<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>

<body class="lockscreen">
    <!-- Automatic element centering -->
    <div class="container">
        <div class="text-center mt-5 mb-4">
            <h2>Nomor Antrian</h2>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <?php
                foreach ($antrian as $ant) {
                    // dd($ant);
                ?>
                    <div class="card card-success card-tabs">
                        <div class="card-body">
                            <table class="table table-sm table-striped responsive " width="100%">

                                <tbody>
                                    <tr>
                                        <td width="30%">No Pendaftaran</td>
                                        <td width="50%">: <?= $ant['no_pendaftaran'] ?></td>
                                        <td width="50%"><b>No Antrian :</b> <?= $ant['no_antrian'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pendaftaran</td>
                                        <td>: <?= $ant['tgl_pendaftaran'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Kunjungan</td>
                                        <td>: <?= $ant['tgl_kunjungan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Poli Tujuan</td>
                                        <td>: <?= $ant['nm_poli'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kategori</td>
                                        <td>: <?= $ant['kategori'] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= base_url() ?>/Puskesmas" class="btn bg-success btn-sm">Landing Page</a>
                                                <a href="<?= base_url() ?>/Puskesmas/cetak/<?= $ant['no_pendaftaran']; ?>" class="btn btn-info btn-sm"><i class="fa fa-print"></i> Cetak</a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card -->
                    </div>

                <?php } ?>
                <!-- <div class="card card-success card-tabs">
                    <div class="card-body">
                        <div class="card-foote">
                            <a href="<?= base_url() ?>/Puskesmas" class="btn bg-teal float-right">Landing Page</a>
                        </div>
                    </div>
                     /.card -->
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>