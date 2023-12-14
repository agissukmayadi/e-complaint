<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-lg-2">
                <img src="<?= base_url('assets/img/user/' . $user['foto']) ?>" alt="" class="rounded-circle" style="margin-left: 30px;" width="200px" height="200px">
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h3><b><?= $user['nama'] ?></b></h3>
                    </div>
                    <div class="col-lg-12">
                        <p>
                            <?= $user['nik'] ?>
                            <?php if ($user['status'] == 0) { ?>
                                <span class="badge badge-info">Belum di verifikasi</span>
                            <?php } elseif ($user['status'] == 1) { ?>
                                <span class="badge badge-success">Aktif</span>
                            <?php } elseif ($user['status'] == 2) { ?>
                                <span class="badge badge-danger">Di Nonaktifkan</span>
                            <?php } ?>
                            <br>
                            <small>Bergabung pada <?= date('l,d M Y', $user['date_created']) ?></small>
                        </p>

                    </div>
                    <div class="col-lg-12 visible-lg visible-lg visible-lg summary-list-item">
                        <span class="nowrap"><span class="fa fa-phone"></span> <?= $user['telp'] ?></span>

                        | <span class="nowrap"><span class="fa fa-envelope"></span> <?= $user['email'] ?></span>

                        | <span class="nowrap"><span class="fa fa-venus-mars"></span> <?= $user['jenis_kelamin'] ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-10"></div>
            <div class="col-lg-2">
                <a href="<?= base_url('User/edit_profile/' . $user['nik']) ?>" class="btn btn-primary btn-icon-split ">
                    <span class="icon text-white-50">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit Profile</span>
                </a>
            </div>
        </div>
    </div>
</div>