<!DOCTYPE html>

<?php
$table_chart='active';
include'../layout/identifier.php';
if(empty($_SESSION['jabatan'])) {
		header("location:../index.php");
	}
	else{
	$jabatan=$_SESSION['jabatan'];
	
	
	}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Guru PAGE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="../index2.html">Welcome to <b>AMS</b></a>
      </div>
      <!-- User name -->
      <div class="lockscreen-name">Anda login sebagai Guru</div>  <div class='text-center'>
       
      </div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
      
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
  	<form action="table_dosen.php" method="post">
		<div class="from-group">
		<div class="input-group">
		<div class="input-group-addon">
		<i class="fa  fa-group (alias)"></i>
		</div>
		<input name="kelas" class="form-control" list="listnama" placeholder="Kelas" />
		<datalist id="listnama" >
		<?php
										$qry = mysqli_query($con, "SELECT DISTINCT kelas FROM siswa");
										while($rst = mysqli_fetch_array($qry)) {
											?>
											<option value="<?php echo $rst['kelas']?>"></option>
											<?php
										}
									?>
								  </datalist>
								
							</div><!-- /.input group -->
							</div>
							
							
							
		
							<div class="from-group">
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa  fa-link"></i>
							  </div>
					<select name="tipe" required class="form-control">
					<option selected disabled value="">-Pelajaran-</option>
					<option value="1">Bahasa Indonesia</option>
					<option value="2">Matematika</option>
					<option value="3">Fisika</option>
					<option value="4">Bahasa Inggris</option>
					<option value="5">Kimia</option>
					<option value="6">Biologi</option>
					</select>
							 
							 
							 
							 
							</div><!-- /.input group -->	</div>
						
						<div class="from-group">
						
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa  fa-tags"></i>
							  </div>
							  <input name="jurusan" class="form-control" list="listnamas" placeholder="Jurusan" />
							 <datalist id="listnamas" >
									<?php
										$qry2 = mysqli_query($con, "SELECT DISTINCT jurusan FROM siswa");
										while($rst2 = mysqli_fetch_array($qry2)) {
											?>
											<option value="<?php echo $rst2['jurusan']?>"></option>
											<?php
										}
									?>
								  </datalist>
								
							</div><!-- /.input group -->
							</div>							
								<div class="col-md-12">
								<span class="input-group-btn"> 
								  <input type="submit" class="btn btn-info btn-flat" value="Go!"   style="width: 288px;margin-left: -14px;">
								</span>
								</div>							
					
					</form>
					
					     <!-- FORM SEMESTER -->

						
					

      </div><!-- /.lockscreen-item -->
    <br>
	   <a type="button" href="../logout.php"  style="
    padding-left: 170px;
">LOGOUT</a>

   
      <div class='lockscreen-footer text-center'>
        Copyright &copy; 2014-2015 <b><a href="http://almsaeedstudio.com" class='text-black'>Akademi Monitoring System</a></b><br>
        All rights reserved
      </div>
    </div><!-- /.center -->

    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>