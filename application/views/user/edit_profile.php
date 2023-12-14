<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
    </div>
    <div class="card-body">
        <div class="form">
            <form action="<?= base_url('User/edit_profile_aksi/' . $user['nik']) ?>" class="form" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">NIK</label>
                    <div class="col-lg-10">
                        <input type="text" name="nik" class="form-control" value="<?= $user['nik'] ?>" disabled>
                        <?= form_error('nik', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                        <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" disabled>
                        <?= form_error('username', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" readonly>
                        <?= form_error('email', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Password</label>
                    <div class="input-group mb-3 col-lg-10">
                        <input type="password" class="form-control" name="password" disabled="disabled" value="*******">
                        <div class=" input-group-append">
                            <a href="<?= base_url('User/edit_pass/' . $user['nik']) ?>"><button class="btn btn-outline-secondary" type="button"><i class="fa fa-edit"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Nama Lengkap</label>
                    <div class="col-lg-10">
                        <input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>">
                        <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">No Telepon</label>
                    <div class="col-lg-10">
                        <input type="number" name="telp" class="form-control" value="<?= $user['telp'] ?>">
                        <?= form_error('telp', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="curl" class="control-label col-lg-2">Jenis Kelamin</label>
                    <div class="col-lg-10">
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="" disabled>Jenis Kelamin</option>
                            <option value="Pria" <?php if ($user['jenis_kelamin'] == "Pria") {
                                                        echo "selected";
                                                    } ?>>Pria</option>
                            <option value="Wanita" <?php if ($user['jenis_kelamin'] == "Wanita") {
                                                        echo "selected";
                                                    } ?>>Wanita</option>
                        </select>
                        <?= form_error('jenis_kelamin', ' <small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-lg-2">Foto</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="input" name="foto" type="file" />
                        <?php
                        echo form_error('foto', '<div style="margin-top: 2px; margin-bottom: 5px;">
                                                <small class="text-danger mx-2">', '</small></div>')
                        ?>
                    </div>
                    <div class="col-lg-7">
                        <img id="box" class="img-thumbnail" src="<?= base_url('assets/img/user/' . $user['foto']) ?>" height="200px" width="200px">
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