<?php
	include ('../include/config.php');

	$id_platform = $_GET['id_platform'];
	$nama_platform = $_POST['nama_platform'];

	$con->query("UPDATE tb_platform SET nama_platform='$nama_platform' WHERE id_platform='$id_platform' ");

	if ($con->affected_rows > 0){
		echo "<script>alert('Platform telah berhasil disimpan');window.location='../index.php?page=platform'</script>";
	}else{
		echo "<script>alert('Platform telah gagal disimpan');window.location='../index.php?page=platform'</script>";
}