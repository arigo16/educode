<?php
    include '../include/config.php';

    $id_tema = $_GET['id_tema'];
    $db = $con->query("DELETE FROM tb_tema WHERE id_tema='$id_tema'");

    if ($con->affected_rows > 0){
        echo "<script>alert('Tema telah berhasil dihapus');window.location='../index.php?page=tema'</script>";
    }else{
        echo "<script>alert('Tema telah gagal dihapus');window.location='../index.php?page=tema'</script>";
    }
?>