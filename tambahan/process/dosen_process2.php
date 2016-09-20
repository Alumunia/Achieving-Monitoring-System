<?php
	include '../koneksi.php';
	session_start();
	if(empty($_SESSION['id'])) {
		header("location:../index.php");
	}

	session_destroy();
	$names = $_POST['namesa'];
	
	$que = mysqli_query($con, "SELECT * FROM siswa WHERE namaSiswa = '$names' ");
	$res = mysqli_fetch_array($que);
	
		
		session_start();
		$_SESSION['id'] = $res['namaSiswa'];
		$_SESSION['level'] = $res['level'];
		$_SESSION['username'] = $res['username'];
		$_SESSION['akses'] = $res['akses'];
		$_SESSION['jabatan'] = 'dosen';
		
		echo $_SESSION['jabatan'];
		
		header("location:../pages/table_score.php");
	

	
?>