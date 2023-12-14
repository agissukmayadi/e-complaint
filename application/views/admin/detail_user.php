<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-primary"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="<?= base_url('assets/img/user/' . $detail_user['foto']) ?>" alt="" class="rounded-circle" style="margin-left: 30px;" width="200px" height="200px">
                    </div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3><b><?= $detail_user['nama'] ?></b></h3>
                            </div>
                            <div class="col-lg-12">
                                <p>
                                    <?= $detail_user['nik'] ?>
                                    <?php if ($detail_user['status'] == 0) { ?>
                                        <span class="badge badge-info">Belum di verifikasi</span>
                                    <?php } elseif ($detail_user['status'] == 1) { ?>
                                        <span class="badge badge-success">Aktif</span>
                                    <?php } elseif ($detail_user['status'] == 2) { ?>
                                        <span class="badge badge-danger">Di Nonaktifkan</span>
                                    <?php } elseif ($detail_user['status'] == 3) { ?>
                                        <span class="badge badge-secondary">Tidak terverifikasi</span>
                                    <?php } ?>

                                    <br>
                                    <small>Bergabung pada <?= date('l,d M Y', $detail_user['date_created']) ?></small>
                                </p>

                            </div>
                            <div class="col-lg-12 visible-lg visible-lg visible-lg summary-list-item">
                                <span class="nowrap"><span class="fa fa-phone"></span> <?= $detail_user['telp'] ?></span>

                                | <span class="nowrap"><span class="fa fa-envelope"></span> <?= $detail_user['email'] ?></span>

                                | <span class="nowrap"><span class="fa fa-venus-mars"></span> <?= $detail_user['jenis_kelamin'] ?></span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <b>Keterangan :</b> <?php if ($detail_user['keterangan'] == NULL) {
                                                        echo "-";
                                                    } else {
                                                        echo $detail_user['keterangan'];
                                                    } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11"></div>
                    <div class="col-lg-1">
                        <a href="<?= base_url('Admin/data_user') ?>" class="btn btn-secondary btn-icon-split ">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>