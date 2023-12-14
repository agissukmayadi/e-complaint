<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-primary"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Subject</th>
                            <th>Laporan</th>
                            <th>Status</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pengaduan as $baris) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><a href="<?= base_url('petugas/detail_user/' . $baris['nik']) ?>" class="nav-link text-primary"><?= $baris['nik'] ?></a></td>
                                <td><?= $baris['subject'] ?></td>
                                <td><?= substr($baris['laporan'], 0, 50); ?>...</td>
                                <td>
                                    <?php if ($baris['status'] == "proses") { ?>
                                        <span class="badge badge-info">Proses</span>
                                    <?php } elseif ($baris['status'] == "selesai") { ?>
                                        <span class="badge badge-success">Selesai</span>
                                    <?php } elseif ($baris['status'] == "0") { ?>
                                        <span class="badge badge-primary">Menunggu Verifikasi</span>
                                    <?php } elseif ($baris['status'] == "tolak") { ?>
                                        <span class="badge badge-danger">Di Tolak</span>
                                    <?php } ?>
                                </td>
                                <td><?= date('d M Y', $baris['date_created']) ?></td>
                                <td>
                                    <?php if ($baris['status'] == "proses") { ?>
                                        <a href="<?= base_url('Petugas/tanggapi_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-success"><i class="fa fa-share"></i></button></a>
                                    <?php } elseif ($baris['status'] == "selesai") { ?>
                                        <a href="<?= base_url('Petugas/detail_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                    <?php } elseif ($baris['status'] == "tolak") { ?>
                                        <a href="<?= base_url('Petugas/detail_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Subject</th>
                            <th>Laporan</th>
                            <th>Status</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>