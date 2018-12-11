<?php
    include ('../include/config.php');

    $nama_jurusan = $_POST['nama_jurusan'];

    $con->query("INSERT INTO tb_jurusan VALUES (NULL, '$nama_jurusan')");

    if ($con->affected_rows > 0){
        echo "<script>alert('Jurusan telah berhasil disimpan');window.location='../index.php?page=jurusan'</script>";
    }else{
        echo "<script>alert('Jurusan telah gagal disimpan');window.location='../index.php?page=jurusan'</script>";
}