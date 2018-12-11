<?php
	include ('../include/config.php');

	$id_jurusan = $_GET['id_jurusan'];
	$nama_jurusan = $_POST['nama_jurusan'];

	$con->query("UPDATE tb_jurusan SET nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan' ");

	if ($con->affected_rows > 0){
		echo "<script>alert('Jurusan telah berhasil disimpan');window.location='../index.php?page=jurusan'</script>";
	}else{
		echo "<script>alert('Jurusan telah gagal disimpan');window.location='../index.php?page=jurusan'</script>";
}