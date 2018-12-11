<?php
    include '../include/config.php';

    $id_jurusan = $_GET['id_jurusan'];
    $db = $con->query("DELETE FROM tb_jurusan WHERE id_jurusan='$id_jurusan'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Jurusan telah berhasil dihapus');window.location='../index.php?page=jurusan'</script>";
    }else{
        echo "<script>alert('Jurusan telah gagal dihapus');window.location='../index.php?page=jurusan'</script>";
    }
?>