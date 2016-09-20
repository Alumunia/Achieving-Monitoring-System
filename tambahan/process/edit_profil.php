<?php
	include '../koneksi.php';
	
	session_start();
	if(empty($_SESSION['id'])) {
		header("location:../../index.php");
	}
	$id = $_SESSION['id'];
	$query = mysqli_query($con, "SELECT * FROM admin WHERE username = '$id'");
	$result = mysqli_fetch_array($query);
	if($result['level'] == 1) {
		$level = "Super Admin";
	} else {
		$level = "Administrator";
	}
	$day = gmdate("l");
	$date = gmdate("j F Y");
	$tgl = gmdate("Y-m-d");
	$pict = rand(1, 5);
	$id = $_SESSION['id'];
	$level = $_SESSION['level'];
	$username = $_SESSION['username'];
	
	
	
	$password = $_POST['password'];
	$oldpassword = $_POST['oldpassword'];
	if ($oldpassword==$password){
	
	mysqli_query($con,"UPDATE siswa SET password='$password' WHERE username='$username'");
	
	header("location:../pages/table_profil.php?gagal=false");
	}
	else{
	
	header("location:../pages/table_profil.php?gagal=true");
	}


?>