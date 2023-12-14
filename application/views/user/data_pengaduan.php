<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="<?= base_url('user/tambah_pengaduan') ?>" class="float-right btn btn-primary btn-sm"><i class="fa fa-plus"></i> Pengaduan</a>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
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
                                <td><?= $baris['subject'] ?></td>
                                <td><?= substr($baris['laporan'], 0, 30); ?>...</td>
                                <td>
                                    <?php if ($baris['status'] == "proses") { ?>
                                        <span class="badge badge-info">Proses</span>
                                    <?php } elseif ($baris['status'] == "selesai") { ?>
                                        <span class="badge badge-success">Selesai</span>
                                    <?php } elseif ($baris['status'] == "0") { ?>
                                        <span class="badge badge-secondary">Menunggu Verifikasi</span>
                                    <?php } elseif ($baris['status'] == "tolak") { ?>
                                        <span class="badge badge-danger">Di Tolak</span>
                                    <?php } ?>
                                </td>
                                <td><?= date('d M Y', $baris['date_created']) ?></td>
                                <td>
                                    <?php if ($baris['status'] == "proses") { ?>
                                        <a href="<?= base_url('User/detail_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                    <?php } elseif ($baris['status'] == "selesai") { ?>
                                        <a href="<?= base_url('User/detail_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                        <a href="<?= base_url('User/print_laporan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-success"><i class="fa fa-print"></i></button></a>
                                    <?php } elseif ($baris['status'] == "0") { ?>
                                        <a href="<?= base_url('User/detail_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                        <a href="<?= base_url('User/edit_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></a>
                                        <a href="<?= base_url('User/hapus_pengaduan/' . $baris['id_pengaduan']) ?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                                    <?php } elseif ($baris['status'] == "tolak") { ?>
                                        <a href="<?= base_url('User/detail_pengaduan/' . $baris['id_pengaduan']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
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