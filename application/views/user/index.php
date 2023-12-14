<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-spell-check"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pengaduan Verifikasi</span>
                <span class="info-box-number">
                    <?= $count_pengaduanverifikasi ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-spinner"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pengaduan Proses</span>
                <span class="info-box-number"><?= $count_pengaduanproses ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-exclamation"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pengaduan Tolak</span>
                <span class="info-box-number"><?= $count_pengaduantolak ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pengaduan Selesai</span>
                <span class="info-box-number"><?= $count_pengaduanselesai ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->