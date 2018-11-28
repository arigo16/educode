<?php
	session_start();
	include '../include/config.php';

	$id_user = $_POST['id_user'];
	$pass = $_POST['password'];

	$r = $con->query("SELECT * FROM tb_user WHERE id_user = '$id_user' AND `password` = '$pass'");
	if ($r -> num_rows > 0){
		while ($rr = $r->fetch_array()){
			$_SESSION['id_user'] = $rr['id_user'];
			$_SESSION['nama'] = $rr['nama'];
			$_SESSION['otorisasi'] = $rr['otorisasi'];
		}
		header("location:../index.php");
	}else{
		$_SESSION['error'] = '<div class="text-center p-t-12"><span class="txt1">User ID and password does not match</span></div>';
		header("location:../login.php");
	}
?>