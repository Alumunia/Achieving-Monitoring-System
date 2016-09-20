<?php
	include '../koneksi.php';
	include '../konfoto.php';
	session_start();
	if(empty($_SESSION['id'])) {
		header("location:../index.php");
	}
	$id = $_SESSION['id'];
	$level = $_SESSION['level'];
	$username = $_SESSION['username'];
	$akses = $_SESSION['akses'];
	$_SESSION['jabatan'];
	
	
	$day = gmdate("l");
	$date = gmdate("j F Y");
	$tgl = gmdate("Y-m-d");
	$pict = rand(1, 5);
?>