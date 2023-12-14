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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telepon</th>
                            <th>Status</th>
                            <th>Date Created</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_user as $baris) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $baris['nik'] ?></td>
                                <td><?= $baris['nama'] ?></td>
                                <td><?= $baris['email'] ?></td>
                                <td><?= $baris['jenis_kelamin'] ?></td>
                                <td><?= $baris['telp'] ?></td>
                                <td>
                                    <?php if ($baris['status'] == 0) { ?>
                                        <span class="badge badge-info">Menunggu verifikasi</span>
                                    <?php } elseif ($baris['status'] == 1) { ?>
                                        <span class="badge badge-success">Aktif</span>
                                    <?php } elseif ($baris['status'] == 2) { ?>
                                        <span class="badge badge-danger">Di Nonaktifkan</span>
                                    <?php } elseif ($baris['status'] == 3) { ?>
                                        <span class="badge badge-secondary">Tidak terverifikasi</span>
                                    <?php } ?>
                                </td>
                                <td><?= date('d M Y', $baris['date_created']) ?></td>
                                <td><a href="<?= base_url('Admin/detail_user/' . $baris['nik']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telepon</th>
                            <th>Status</th>
                            <th>Date Created</th>
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