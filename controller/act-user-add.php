<?php
    include ('../include/config.php');

    $id_user = $_POST['id_user'];
    $id_jurusan = $_POST['id_jurusan'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $otorisasi = $_POST['otorisasi'];

    $con->query("INSERT INTO tb_user VALUES ('$id_user', '$id_jurusan', '$password', '$nama', '$otorisasi')");

    if ($con->affected_rows > 0){
        echo "<script>alert('User telah berhasil disimpan');window.location='../index.php?page=user'</script>";
    }else{
        echo "<script>alert('User telah gagal disimpan');window.location='../index.php?page=user'</script>";
}