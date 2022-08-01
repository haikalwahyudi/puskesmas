<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>

<body style="background: #cecece;">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card mt-5 p-2">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?= base_url(); ?>/images/logo.png" alt="logo" width="70%">
                        </div>
                        <div class="col-md-9 pt-4">
                            <h4>Puskesmas SESELA</h4>
                            <p>Jln.Raya Sesela</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th width="30%">No Pendaftaran</th>
                                <td width="5%">:</td>
                                <td width="65%"><?= $data[0]['no_pendaftaran'] ?></td>
                            </tr>
                            <tr>
                                <th>Nama Pasien</th>
                                <td>:</td>
                                <td><?= $data[0]['nm_psn'] ?></td>
                            </tr>
                            <tr>
                                <th>No Antrian</th>
                                <td>:</td>
                                <td><?= $data[0]['no_antrian'] ?></td>
                            </tr>
                            <tr>
                                <th>Poli Tujuan</th>
                                <td>:</td>
                                <td><?= $data[0]['nm_poli'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        window.print();
        onafterprint = back;

        function back() {
            // history.back();
            location = "<?= base_url('/Puskesmas/dpendaftar'); ?>";
        }
    </script>
</body>

</html>