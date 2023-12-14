<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-primary"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form">
                    <form action="<?= base_url('Admin/tambah_petugas_aksi') ?>" class="form" method="POST">
                        <div class="form-group row">
                            <label class="control-label col-lg-2">Nama Petugas</label>
                            <div class="col-lg-10">
                                <input type="text" name="nama_petugas" class="form-control" value="<?php echo set_value('nama_petugas') ?>" autocomplete="off">
                                <?= form_error('nama_petugas', ' <small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-lg-2">Username</label>
                            <div class="col-lg-10">
                                <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>">
                                <?= form_error('username', ' <small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
                                <?= form_error('password', ' <small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-lg-2">Password Konfirmasi</label>
                            <div class="col-lg-10">
                                <input type="password" name="password1" class="form-control" value="<?php echo set_value('password1') ?>">
                                <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-lg-2">No Telepon</label>
                            <div class="col-lg-10">
                                <input type="number" name="telp" class="form-control" value="<?php echo set_value('telp') ?>">
                                <?= form_error('telp', ' <small class="text-danger pl-3">', '</small>') ?>
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
                                <a href="<?= base_url('Admin/data_petugas') ?>" class="btn btn-secondary btn-icon-split">
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
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>