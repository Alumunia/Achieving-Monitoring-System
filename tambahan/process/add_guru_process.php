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
	
	$username12 = $_POST ['username12'];
	$nama12 = $_POST ['nama12'];
	$password12 = $_POST ['password12'];
	
	mysqli_query($con,"INSERT INTO `ams12`.`admin` (`username`, `nama`, `password`, `level`, `akses`) VALUES ('$username12', '$nama12', 'password12', 'dosen', 'dosen');");
	
	header("location:../pages/table_member.php");
	
?>