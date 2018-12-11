<?php
    // Hitung Mahasiswa
    $result = $con->query("SELECT COUNT(*) FROM tb_user WHERE otorisasi='Mahasiswa'");
    $row = $result->fetch_row();
    $jml_mhs = $row[0];

    // Hitung Semua Skripsi
    $result = $con->query("SELECT COUNT(*) FROM tb_pengajuan_detail");
    $row = $result->fetch_row();
    $jml_all_skripsi = $row[0];

    // Hitung Skripsi Disetujui
    $result = $con->query("SELECT COUNT(*) FROM tb_pengajuan_detail WHERE `status`='Disetujui'");
    $row = $result->fetch_row();
    $jml_skripsi_setuju = $row[0];

    // Hitung Skripsi Ditolak
    $result = $con->query("SELECT COUNT(*) FROM tb_pengajuan_detail WHERE `status`='Ditolak'");
    $row = $result->fetch_row();
    $jml_skripsi_tolak = $row[0];
?>

<div class="analytics-sparkle-area" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Mahasiswa</h5>
                        <h2><span class="counter"><?php echo $jml_mhs; ?></span> <span class="tuition-fees">Total</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Skripsi</h5>
                        <h2><span class="counter"><?php echo $jml_skripsi_setuju; ?></span> <span class="tuition-fees">Disetujui</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Skripsi</h5>
                        <h2><span class="counter"><?php echo $jml_skripsi_tolak; ?></span> <span class="tuition-fees">Ditolak</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Skripsi</h5>
                        <h2><span class="counter"><?php echo $jml_all_skripsi; ?></span> <span class="tuition-fees">Terkumpul</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>