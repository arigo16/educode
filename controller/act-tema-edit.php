<?php
	include ('../include/config.php');

	$id_tema = $_GET['id_tema'];
	$nama_tema = $_POST['nama_tema'];

	$con->query("UPDATE tb_tema SET nama_tema='$nama_tema' WHERE id_tema='$id_tema' ");

	if ($con->affected_rows > 0){
		echo "<script>alert('Tema telah berhasil disimpan');window.location='../index.php?page=tema'</script>";
	}else{
		echo "<script>alert('Tema telah gagal disimpan');window.location='../index.php?page=tema'</script>";
}