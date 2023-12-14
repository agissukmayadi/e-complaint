<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<!-- Custom fonts for this template-->
<link href="<?= base_url('assets/template/Sbadmin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url('assets/template/Sbadmin/') ?>css/sb-admin-2.min.css" rel="stylesheet">
<link href="<?= base_url('assets/template/Sbadmin/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<body>
    <div class="text-center mt-4 text-dark">
        <h2>DATA PENGADUAN</h2>
        <h4><?= strtoupper($contact['location'])  ?></h4>
        <h5><?= date('d M Y', time()) ?></h5>
    </div>
    <div class="table-responsive p-4">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Subject</th>
                <th>Laporan</th>
                <th>Status</th>
                <th>Tanggal Pengaduan</th>
            </tr>
            <?php
            $no = 1;
            foreach ($data_pengaduan as $baris) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $baris['nik'] ?></td>
                    <td><?= $baris['subject'] ?></td>
                    <td><?= $baris['laporan'] ?></td>
                    <td>
                        <?php if ($baris['status'] == "selesai") { ?>
                            <p class="text-success">Selesai</p>
                        <?php } elseif ($baris['status'] == "proses") { ?>
                            <p class="text-info">Proses</p>
                        <?php } elseif ($baris['status'] == "0") { ?>
                            <p class="text-primary">Menunggu Persetujuan</p>
                        <?php } elseif ($baris['status'] == "tolak") { ?>
                            <p class="text-danger">Di Tolak</p>
                        <?php } ?>
                    </td>
                    <td><?= date('d M Y', $baris['date_created']) ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>