<?php
    include ('../include/config.php');
    session_start();

    $id_user = $_SESSION['id_user'];
    $r = $con->query("SELECT * FROM tb_pengajuan WHERE id_user = '$id_user'");
	if ($r -> num_rows > 0){
        echo "<script>window.location='../index.php?page=pengajuan-skripsi-view'</script>";
    }else{
        echo "<script>window.location='../index.php?page=pengajuan-skripsi'</script>";
    }