<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pasien</title>
</head>
<body>
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>NIK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kelurahan</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d->kd_psn; ?></td>
                <td><?= $d->nm_psn; ?></td>
                <td><?= $d->nik; ?></td>
                <td><?= $d->tempat_lahir; ?></td>
                <td><?= $d->tanggal_lahir; ?></td>
                <td><?= $d->kelurahan; ?></td>
                <td><?= $d->jk; ?></td>
                <td><?= $d->nohp; ?></td>
                <!-- <td>
                    <a href="<?= base_url() ?>/puskesmas/hpasienAksi/<?= $d->kd_psn; ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini!')"><i class="fa fa-trash"></i></a>
                    <a href="<?= base_url(); ?>/puskesmas/upasien/<?= $d->kd_psn; ?>" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
                </td> -->
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    print();
</script>
</body>
</html>