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
	
	$username = $_GET ['username'];
	$user = $_POST ['user'];
	$password = $_POST ['password'];
	
	mysqli_query($con,"UPDATE admin SET username='$user',password='$password' WHERE username='$username'");

	header("location:../pages/table_member.php");
?>