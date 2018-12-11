<?php
    include '../include/config.php';

    $id_user = $_GET['id_user'];
    $db = $con->query("DELETE FROM tb_user WHERE id_user='$id_user'");

    if ($con->affected_rows > 0){
        echo "<script>alert('User telah berhasil dihapus');window.location='../index.php?page=user'</script>";
    }else{
        echo "<script>alert('User telah gagal dihapus');window.location='../index.php?page=user'</script>";
    }
?>