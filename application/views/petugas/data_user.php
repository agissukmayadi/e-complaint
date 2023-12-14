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
                                    <?php if ($baris['status'] == 1) { ?>
                                        <span class="badge badge-success">Aktif</span>
                                    <?php } elseif ($baris['status'] == 2) { ?>
                                        <span class="badge badge-danger">Di Nonaktifkan</span>
                                    <?php } elseif ($baris['status'] == 3) { ?>
                                        <span class="badge badge-secondary">Tidak terverifikasi</span>
                                    <?php } ?>
                                </td>
                                <td><?= date('d M Y', $baris['date_created']) ?></td>
                                <td>
                                    <?php if ($baris['status'] == 1) { ?>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="<?= base_url('Petugas/detail_user/' . $baris['nik']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                            <button class="btn btn-danger btn-sm ml-1" type="button" data-toggle="modal" data-target="#keterangan<?= $baris['nik'] ?>"><i class="fa fa-power-off"></i></button>
                                            <form action="<?= base_url('Petugas/nonaktif_user/' . $baris['nik']) ?>" method="POST">
                                                <!-- Modal -->
                                                <div class="modal fade" id="keterangan<?= $baris['nik'] ?>" tabindex="-1" role="dialog" aria-labelledby="keteranganLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="keteranganLabel">Keterangan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" value="2" name="status">
                                                                <div class="form-group">
                                                                    <label for="">Keterangan</label>
                                                                    <textarea name="keterangan" required class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin?')">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <?php } elseif ($baris['status'] == 2) { ?>
                                        <a href="<?= base_url('Petugas/detail_user/' . $baris['nik']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                    <?php } elseif ($baris['status'] == 3) { ?>
                                        <a href="<?= base_url('Petugas/detail_user/' . $baris['nik']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button></a>
                                    <?php } ?>

                                </td>
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