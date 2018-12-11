<?php
    include ('../include/config.php');

    $nama_platform = $_POST['nama_platform'];

    $con->query("INSERT INTO tb_platform VALUES (NULL, '$nama_platform')");

    if ($con->affected_rows > 0){
        echo "<script>alert('Platform telah berhasil disimpan');window.location='../index.php?page=platform'</script>";
    }else{
        echo "<script>alert('Platform telah gagal disimpan');window.location='../index.php?page=platform'</script>";
}