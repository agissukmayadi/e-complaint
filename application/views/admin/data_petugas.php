<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-primary"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="<?= base_url('admin/tambah_petugas') ?>" class="float-right btn btn-primary btn-sm"><i class="fa fa-plus"></i> Petugas</a>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>No Telepon</th>
                            <th>Date Created</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_petugas as $baris) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $baris['nama_petugas'] ?></td>
                                <td><?= $baris['username'] ?></td>
                                <td><?= $baris['telp'] ?></td>
                                <td><?= date('d M Y', $baris['date_created']) ?></td>
                                <td><a href="<?= base_url('Admin/hapus_petugas/' . $baris['id_petugas']) ?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>No Telepon</th>
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
