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
	
	$username = $_POST['nama'];
	$namaSiswa = $_POST['namaSiswa'];
	$password = $_POST['password'];
	
	mysqli_query($con,"INSERT INTO siswa VALUES('$username','$namaSiswa','$password','siswa')");
	
	header("location:../pages/table_member.php");
	
?>