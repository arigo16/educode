<?php
    include ('../include/config.php');

    $nama_tema = $_POST['nama_tema'];

    $con->query("INSERT INTO tb_tema VALUES (NULL, '$nama_tema')");

    if ($con->affected_rows > 0){
        echo "<script>alert('Tema telah berhasil disimpan');window.location='../index.php?page=tema'</script>";
    }else{
        echo "<script>alert('Tema telah gagal disimpan');window.location='../index.php?page=tema'</script>";
}