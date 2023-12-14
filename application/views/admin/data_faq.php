<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-primary"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="<?= base_url('admin/tambah_FAQ') ?>" class="float-right btn btn-primary btn-sm"><i class="fa fa-plus"></i> FAQ</a>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Date Created</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_faq as $baris) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= substr($baris['question'], 0, 50); ?>...</td>
                                <td><?= substr($baris['answer'], 0, 50); ?>...</td>
                                <td><?= date('d M Y', $baris['date_created']) ?></td>
                                <td><a href="<?= base_url('Admin/edit_faq/' . $baris['id_faq']) ?>"><button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button></a> | <a href="<?= base_url('Admin/hapus_faq/' . $baris['id_faq']) ?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
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