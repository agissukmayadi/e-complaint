<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Pengaduan</h6>
    </div>
    <div class="card-body">
        <div class="form">
            <?php
            foreach ($data_pengaduan as $baris) {
            ?>
                <form action="<?= base_url('User/edit_pengaduan_aksi/' . $baris['id_pengaduan']) ?>" class="form" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="nik" value="<?= $user['nik'] ?>">
                    <div class="form-group row">
                        <label for="curl" class="control-label col-lg-2">Subject</label>
                        <div class="col-lg-10">
                            <select name="id_subject" class="form-control">
                                <option disabled selected>Pilih Subject</option>
                                <?php
                                foreach ($subject as $subject) {
                                ?>
                                    <option value="<?= $subject['id_subject'] ?>" <?php if ($baris['id_subject'] == $subject['id_subject']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $subject['subject'] ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('id_subject', ' <small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="curl" class="control-label col-lg-2">Laporan</label>
                        <div class="col-lg-10">
                            <textarea name="laporan" class="form-control" id="editor1">
                        <?php echo $baris['laporan']; ?>
                        </textarea>
                            <?= form_error('laporan', ' <small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-lg-2">File Tambahan</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="input" name="file" type="file" />
                            <small>(Ukuran maksimal 10MB)</small>
                            <?php
                            echo form_error('file', '<div style="margin-top: 2px; margin-bottom: 5px;">
                                                <small class="text-danger mx-2">', '</small></div>')
                            ?>
                        </div>
                        <div class="col-lg-7">
                            <img id="box" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <button class="btn btn-success btn-icon-split" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Simpan</span>
                            </button>
                            <a href="<?= base_url('User/data_pengaduan') ?>" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Kembali</span>
                            </a>
                        </div>
                    </div>
                </form>
            <?php } ?>

        </div>
    </div>
</div>