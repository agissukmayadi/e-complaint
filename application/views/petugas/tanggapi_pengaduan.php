<?php foreach ($data_pengaduan as $pengaduan) { ?>
    <div class="row">
        <div class="col-md-3">

            <!-- Profile -->
            <?php
            $user = $this->db->get_where('tb_user', ['nik' => $pengaduan['nik']])->result_array();
            foreach ($user as $user) {
            ?>
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/user/' . $user['foto']) ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $user['nama'] ?></h3>

                        <p class="text-muted text-center"><?= $user['nik'] ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right"><?= $user['email'] ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>No Telepon</b> <a class="float-right"><?= $user['telp'] ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            <?php } ?>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
                </a>
                <!-- Card Content - Collapse -->

                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-2">Subject : </div>
                                    <div class="col-lg-10"><?= $pengaduan['subject'] ?></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-2">Laporan : </div>
                                    <div class="col-lg-10">
                                        <?= $pengaduan['laporan'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-10"></div>
                                    <div class="col-lg-2">
                                        <?= date('d M Y', $pengaduan['date_created']) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <?php if (!$pengaduan['file']) {
                                    echo "*Tidak ada file tambahan";
                                } else { ?>
                                    <embed src="<?= base_url('assets/file/' . $pengaduan['file']) ?>" autostart="false" height="100%" width="100%"></embed>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Tanggapan</h6>
                </a>
                <!-- Card Content - Collapse -->

                <div class="collapse show" id="collapseCardExample2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="<?= base_url('Petugas/tanggapi_pengaduan_aksi/' . $pengaduan['id_pengaduan']) ?>" class="form" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_petugas" value="<?= $petugas['id_petugas'] ?>">
                                    <div class="form-group row">
                                        <label for="curl" class="control-label col-lg-2">Tanggapan</label>
                                        <div class="col-lg-10">
                                            <textarea name="tanggapan" class="form-control" id="editor1">
                                    </textarea>
                                            <?= form_error('tanggapan', ' <small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-10">
                                            <button class="btn btn-success btn-icon-split" type="submit">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-paper-plane"></i>
                                                </span>
                                                <span class="text">Kirim</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <a href="<?= base_url('petugas/data_pengaduan') ?>" class="btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
    </div>
<?php } ?>
<!-- Collapsable Card Example -->