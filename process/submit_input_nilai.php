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
	$qu121 = mysqli_query($con, "SELECT * FROM nilai WHERE siswa_username='$username'");
	while ($result121 = mysqli_fetch_array($qu121)) {
	
	$kelas=$result121['kelas'];
	$jurusan=$result121['jurusan'];
	$nama=$result121['namaSiswa'];
	}
	
	
	$Semester = $_GET ['Semester'];
	$Nilai = $_POST ['Nilai'];
		
	
	foreach($Nilai as $q => $satunilai){
	$mapel=$q+1;
	mysqli_query($con,"INSERT INTO `nilai` VALUES ('','$Semester','$satunilai','$username','$mapel','$kelas','$jurusan','$nama')");
	echo $satunilai." - ".$mapel."<br>";
	
	}
	
	
	header("location:../pages/table_score.php?usernameget=$username");
	
?>