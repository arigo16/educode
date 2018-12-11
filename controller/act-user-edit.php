<?php

include ('../include/config.php');
session_start();

$id_user = $_SESSION['id_user'];
$id_userlama = $_GET['id_user'];
$id_userbaru = $_POST['id_user'];
$id_jurusan = $_POST['id_jurusan'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$otorisasi = $_POST['otorisasi'];

$con->query("UPDATE tb_user SET id_user='$id_userbaru', id_jurusan='$id_jurusan', `password`='$password', nama='$nama', otorisasi='$otorisasi' WHERE id_user='$id_userlama' ");

if ($con->affected_rows > 0){
	if ($id_user == $id_userlama) {
		if ($id_userlama == $id_userbaru) {
			echo "<script>alert('User telah berhasil disimpan');window.location='../index.php?page=user'</script>";
		} else {
			$_SESSION['id_user'] = "$id_userbaru";
			echo "<script>alert('User telah berhasil disimpan');window.location='../index.php?page=user'</script>";
		}
	} else {
		echo "<script>alert('User telah berhasil disimpan');window.location='../index.php?page=user'</script>";
	}
}else{
	echo "<script>alert('User telah gagal disimpan');window.location='../index.php?page=user'</script>";
}