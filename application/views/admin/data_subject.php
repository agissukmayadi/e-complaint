<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-primary"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="<?= base_url('admin/tambah_subject') ?>" class="float-right btn btn-primary btn-sm"><i class="fa fa-plus"></i> Subject</a>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Subject</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_subject as $baris) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $baris['subject'] ?></td>
                                <td><a href="<?= base_url('Admin/edit_subject/' . $baris['id_subject']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button></a> | <a href="<?= base_url('Admin/hapus_subject/' . $baris['id_subject']) ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Subject</th>
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