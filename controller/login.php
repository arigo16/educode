<?php
	session_start();
	include '../include/config.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$r = $con->query("SELECT * FROM tb_user WHERE id_user = '$user' AND password = '$pass'");
	if ($r -> num_rows > 0){
		while ($rr = $r->fetch_array()){
			$_SESSION['username'] = $rr['id_user'];
			$_SESSION['fullname'] = $rr['nama'];
			$_SESSION['authorization'] = $rr['otorisasi'];
		}
		header("location:../index.php");
	}else{
		$_SESSION['error'] = '<div class="text-center p-t-12"><span class="txt1">Username and password does not match</span></div>';
		header("location:../login.php");
	}
?>