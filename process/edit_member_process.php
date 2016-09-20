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
	
	$user = $_GET ['username'];
	$nama = $_POST ['nama'];
	$password = $_POST ['password'];
	$kelas = $_POST ['kelas'];
	
	echo $nama;
	echo $user;
	echo $kelas;

	mysqli_query($con,"UPDATE siswa SET namaSiswa='$nama',password='$password',kelas='$kelas' WHERE username='$user'");

	header("location:../pages/table_member.php");
?>