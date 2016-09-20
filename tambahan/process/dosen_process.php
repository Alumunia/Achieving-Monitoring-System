<?php
	include '../koneksi.php';
	session_start();
	if(empty($_SESSION['id'])) {
		header("location:../index.php");
	}

	session_destroy();
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];
	

		
		
		
		
		echo $kelas;
		echo $jurusan;
		//header("location:../pages/table_score.php");
	

	
?>