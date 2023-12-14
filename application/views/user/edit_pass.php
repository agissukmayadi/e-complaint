<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Password</h6>
    </div>
    <div class="card-body">
        <div class="form">
            <form action="<?= base_url('User/edit_pass_aksi/' . $user['nik']) ?>" class="form" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Password Lama</label>
                    <div class="col-lg-10">
                        <input type="password" name="current_password" class="form-control">
                        <?= form_error('current_password', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Password Baru</label>
                    <div class="col-lg-10">
                        <input type="password" name="password" class="form-control">
                        <?= form_error('password', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Ketik ulang Password</label>
                    <div class="col-lg-10">
                        <input type="password" name="password1" class="form-control">
                        <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>') ?>

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
                        <a href="<?= base_url('User/profile') ?>" class="btn btn-secondary btn-icon-split">
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