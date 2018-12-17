<?php
    date_default_timezone_set("Asia/Jakarta");
    include ('../include/config.php');

    $id_pengajuan = $_GET['id_pengajuan'];
    $judul_skripsi = $_GET['judul_skripsi'];
    $tgl_periksa = date("Y-m-d H:i:s");

    $con->query("UPDATE tb_pengajuan SET `status`='Sudah diperiksa', tgl_periksa='$tgl_periksa' WHERE id_pengajuan='$id_pengajuan'");

    $r = $con->query("SELECT * FROM tb_pengajuan_detail WHERE id_pengajuan='$id_pengajuan'");
    while ($rr = $r->fetch_array()) {
        $judul_skripsi_data = $rr['judul_skripsi'];
        if($judul_skripsi_data == $judul_skripsi){
            $con->query("UPDATE tb_pengajuan_detail SET `status`='Disetujui' WHERE judul_skripsi='$judul_skripsi_data'");
        }else{
            $con->query("UPDATE tb_pengajuan_detail SET `status`='Ditolak' WHERE judul_skripsi='$judul_skripsi_data'");
        }
    }

    echo "<script>alert('Skripsi $judul_skripsi telah disetujui');window.location='../index.php?page=persetujuan-skripsi'</script>";