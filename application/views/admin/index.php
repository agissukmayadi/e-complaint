<div class="row">
    <div class="col-12">
        <a href="<?= base_url('Admin/generate_laporan') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-2 pull-right" style="margin-left: 100px; margin-top:-110px;" target="_blank"><i class="fas fa-download fa-sm text-white-50"></i> Generate Laporan</a>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-spell-check"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pengaduan</span>
                <span class="info-box-number">
                    <?= $count_pengaduan ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">User</span>
                <span class="info-box-number">
                    <?= $count_user ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Petugas</span>
                <span class="info-box-number">
                    <?= $count_petugas ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->