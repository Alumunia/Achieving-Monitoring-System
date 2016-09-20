<!DOCTYPE html>
<?php
include'../layout/identifier.php';
$table_member='active';




	$kelas=$_POST['kelas'];
	
	$jurusan=$_POST['jurusan'];
	$tipe=$_POST['tipe'];
	
	if ($kelas=='1'){
	$Semester='1';
	$Semester2='2';}
	else if ($kelas=='2') {
	$Semester='3';
	$Semester2='4';
	}
	else if ($kelas=='3'){
	$Semester='5';
	$Semester2='6';
	
	}
	
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Data Tables</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	  
	  
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
      <?php require'../layout/header.php'  ?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
<?php require'../layout/sidebar.php'  ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
		<section class="content">
	<div class="row">
	<div class="col-md-6">
      <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Kelas <strong><?php echo $kelas ?></strong> Semester <strong> 1 </strong> Jurusan <strong><?php echo $jurusan ?> </strong>Pelajaran <strong><?php if ($tipe=='1') {echo "Bahasa Indonesia" ;}
						else if ($tipe=='2') {echo "Matematika" ;}
						else if ($tipe=='3') {echo "Fisika" ;}
						else if ($tipe=='4') {echo "Bahasa Inggris" ;}
						else if ($tipe=='5') {echo "Kimia" ;}
						else if ($tipe=='6') {echo "Biologi";}  ?> </strong></h3>
                </div><!-- /.box-header -->
				
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th><?php if ($tipe=='1') {echo "Bahasa Indonesia" ;}
						else if ($tipe=='2') {echo "Matematika" ;}
						else if ($tipe=='3') {echo "Fisika" ;}
						else if ($tipe=='4') {echo "Bahasa Inggris" ;}
						else if ($tipe=='5') {echo "Kimia" ;}
						else if ($tipe=='6') {echo "Biologi";} 
						else{};
						
						
						
						
						
						?></th>
                        
                      
                      </tr>
                    </thead>
					<?php
$no=1;
$result = mysqli_query($con,"SELECT * FROM nilai WHERE Semester=$Semester AND kelas =$kelas AND jurusan='$jurusan' AND Mapel_idMapel=$tipe;") 
or die(mysqli_error());  

$rat=0;
$jumdat=0;
// output data of each row
while($row = mysqli_fetch_assoc( $result )) {
  
?>
                    <tbody>
                      <tr>
                        <td><a type="button" href="table_score.php?usernameget=<?php echo $row['siswa_username'];?>" style="color:black"><?php echo $row['namaSiswa']; ?></a></td>
                        <td><?php echo $row['Nilai']; ?></td>
                      
                        
                      </tr>
					  <?php
					  $jumdat++;
					  $rat+=$row['Nilai'];
					 
					  }
$rata=($rat/$jumdat);

				  ?>
					<tfoot>
					<tr>
					<th>Average</th>
					<th><?php echo $rata;?></th>
					
					
					</tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  </div><!------ROW----->
			  
			  
			  
			  
			  <div class="col-md-6">
      <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Kelas <strong><?php echo $kelas ?></strong> Semester <strong> 2 </strong> Jurusan <strong><?php echo $jurusan ?> </strong>Pelajaran <strong><?php if ($tipe=='1') {echo "Bahasa Indonesia" ;}
						else if ($tipe=='2') {echo "Matematika" ;}
						else if ($tipe=='3') {echo "Fisika" ;}
						else if ($tipe=='4') {echo "Bahasa Inggris" ;}
						else if ($tipe=='5') {echo "Kimia" ;}
						else if ($tipe=='6') {echo "Biologi";}  ?> </strong></h3>
                </div><!-- /.box-header -->
				
                <div class="box-body">
                  <table id="example12" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th><?php if ($tipe=='1') {echo "Bahasa Indonesia" ;}
						else if ($tipe=='2') {echo "Matematika" ;}
						else if ($tipe=='3') {echo "Fisika" ;}
						else if ($tipe=='4') {echo "Bahasa Inggris" ;}
						else if ($tipe=='5') {echo "Kimia" ;}
						else if ($tipe=='6') {echo "Biologi";} 
						else{};
						
						
						
						
						
						?></th>
                        
                      
                      </tr>
                    </thead>
					<?php
$no=1;
$result = mysqli_query($con,"SELECT * FROM nilai WHERE Semester=$Semester2 AND kelas =$kelas AND jurusan='$jurusan' AND Mapel_idMapel=$tipe;") 
or die(mysqli_error());  

$rat=0;
$jumdat=0;
// output data of each row
while($row = mysqli_fetch_assoc( $result )) {
  
?>
                    <tbody>
                      <tr>
                        <td><a type="button" href="table_score.php?usernameget=<?php echo $row['siswa_username'];?>" style="color:black"><?php echo $row['namaSiswa']; ?></a></td>
                        <td><?php echo $row['Nilai']; ?></td>
                      
                        
                      </tr>
					  <?php
					  $jumdat++;
					  $rat+=$row['Nilai'];
					 
					  }
$rata=($rat/$jumdat);

				  ?>
					<tfoot>
					<tr>
					<th>Average</th>
					<th><?php echo $rata;?></th>
					
					
					</tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  </div><!------ROW----->
			  
			  
			  
			  
			  </div><!------ROW----->
      </section>
      </div><!-- /.content-wrapper -->
     <?php require'../layout/footer.php' ?>
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.3 -->
    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $("#example12").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
