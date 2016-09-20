<?php
	include '../koneksi.php';
	
	$user = $_POST['name'];
	$pass = $_POST['pass'];
	
	
	if (isset($_POST['name']) || !isset($_POST['pass'])){
	$query = mysqli_query($con, "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
	$result = mysqli_fetch_array($query);
	$que = mysqli_query($con, "SELECT * FROM siswa WHERE username = '$user' AND password = '$pass'");
	$res = mysqli_fetch_array($que);
	
	if($result) {
	
	

		session_start();
		$_SESSION['id'] = $result['username'];
		$_SESSION['level'] = $result['level'];
		$_SESSION['username'] = $result['nama'];
		if($_SESSION['level']=='admin'){
		$_SESSION['akses'] = $result['akses'];
		$_SESSION['jabatan']='';
		header("location:../pages/table_member.php"); 
		}
		else{
		$_SESSION['akses'] = $result['akses'];
			$_SESSION['jabatan']='dosen';
		header("location:../pages/index_dosen.php"); 
		}
	
	
		
		
	} 
	if($res){
		session_start();
		$_SESSION['id'] = $res['namaSiswa'];
		$_SESSION['level'] = $res['level'];
		$_SESSION['username'] = $res['username'];
		$_SESSION['akses'] = $result['akses'];
		$_SESSION['jabatan']='';
		
		header("location:../pages/table_score.php");

	}
	
	else{
	?>
	
<script languange="javascript">alert("Harap isi password dan username dengn benar");</script>
	<script> document.location.href='../index.php';</script>
	
	
		<?php }
	}
	
	
	
	else {
	
	?>
	<script languange="javascript">alert("Harap isi password dan username dengn benar");</script>
	<script> document.location.href='../index.php';</script>
	<?php } ?>
