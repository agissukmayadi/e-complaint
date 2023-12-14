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
                            <th>Header</th>
                            <th>Footer</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_profile as $baris) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= substr($baris['header'], 0, 50);   ?>...</td>
                                <td><?= substr($baris['footer'], 0, 50);   ?>...</td>
                                <td><a href="<?= base_url('Admin/edit_profile/' . $baris['id_profile']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Header</th>
                            <th>Footer</th>
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