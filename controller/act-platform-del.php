<?php
    include '../include/config.php';

    $id_platform = $_GET['id_platform'];
    $db = $con->query("DELETE FROM tb_platform WHERE id_platform='$id_platform'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Platform telah berhasil dihapus');window.location='../index.php?page=platform'</script>";
    }else{
        echo "<script>alert('Platform telah gagal dihapus');window.location='../index.php?page=platform'</script>";
    }
?>