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
        <div class="col-md-4 offset-4">
            <div class="card mt-5 p-2">
                <div class="card-body">
                    <table class="text-center">
                        <tr>
                            <td>
                                <img src="<?= base_url(); ?>/images/logo.png" alt="Gambar">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1>Puskesmas Sesela</h1>
                                <small>Jln.......</small>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>No Antrian</h5>
                                <h1><?= $data[0]['no_antrian'] ?></h1>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal kunjungan</strong>
                                <p><?= $data[0]['tgl_kunjungan'] ?></p>
                                <p><?= $data[0]['nm_poli'] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>"Semoga Lekas Sembuh Yaa"</strong></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <table border="0" align="center" width="350px">
        <tr>
            <td>
                <center><img src="<?= base_url(); ?>/images/logo.png" alt="Gambar"></center>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Puskesmas Sesela</h3>
                <p>Jln. Ahmadyani no 10</p>
                ====================================
            </td>
        </tr>
        <tr>
            <td>
                <h1>1</h1>
            </td>
        </tr>
        <tr>
            <td>
                <strong>Tanggal Kunjungan</strong>
                <p>10 juni 2022</p>
            </td>
        </tr>
        <tr>
            <td>
                <strong>Poli Tujuan</strong>
                <p>Gigi</p>
                ====================================
            </td>
        </tr>
        <tr>
            <td><strong>"Semoga Lekas Sembuh Yaa"</strong></td>
        </tr>
    </table> -->
    <!-- jQuery -->
    <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        window.print();
        onafterprint = back;

        function back() {
            // history.back();
            location = "<?= base_url('/Puskesmas/antrian'); ?>";
        }
    </script>
</body>

</html>