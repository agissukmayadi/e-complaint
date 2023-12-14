<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Subject</h6>
    </div>
    <div class="card-body">
        <div class="form">
            <form action="<?= base_url('Admin/edit_subject_aksi/' . $data_subject['id_subject']) ?>" class="form" method="POST">
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Subject</label>
                    <div class="col-lg-10">
                        <input type="text" name="subject" class="form-control" value="<?php echo $data_subject['subject'] ?>">
                        <?= form_error('subject', ' <small class="text-danger pl-3">', '</small>') ?>
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
                        <a href="<?= base_url('Admin/data_subject') ?>" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>