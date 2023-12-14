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
                        foreach ($data_verifikasi as $baris) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><a href="<?= base_url('petugas/detail_user/' . $baris['nik']) ?> "><?= $baris['nik'] ?></a> </td>
                                <td><?= $baris['nama'] ?></td>
                                <td><?= $baris['email'] ?></td>
                                <td><?= $baris['jenis_kelamin'] ?></td>
                                <td><?= $baris['telp'] ?></td>
                                <td>
                                    <?php if ($baris['status'] == 0) { ?>
                                        <span class="badge badge-primary">Menunggu Persetujuan</span>
                                    <?php } ?>
                                </td>
                                <td><?= date('d M Y', $baris['date_created']) ?></td>
                                <td>
                                    <form action="<?= base_url('Petugas/verifikasi_aksi/' . $baris['nik']) ?>" method="POST">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="btn btn-success" name="status" value="1" type="submit"><i class="fa fa-check" onclick="return confirm('Yakin?')"></i></button>
                                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#keterangan<?= $baris['nik'] ?>"><i class="fa fa-times"></i></button>
                                        </div>
                                    </form>
                                    <!-- Modal -->
                                    <form action="<?= base_url('Petugas/verifikasi_aksi/' . $baris['nik']) ?>" method="POST">
                                        <input type="hidden" value="3" name="status">
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