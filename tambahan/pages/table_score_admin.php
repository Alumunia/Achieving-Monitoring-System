<!DOCTYPE html>
<?php
		include '../layout/identifier.php';
	if ($level=='siswa'){
	
	}
	else{
	$username = $_GET['usernameget'];
	}
	
	$qry = mysqli_query($con,"SELECT * FROM nilai JOIN mapel JOIN siswa WHERE siswa_username='$username' AND Mapel_idMapel=idMapel AND username='$username' ");
	$produk = mysqli_fetch_array($qry);
	$nama=$produk['namaSiswa'];
	$user=$produk['username'];
	$Semester=$produk['Semester'];
	$table_score='active';
	
	
?>
<html>
  <head>
      <?php include('../layout/head.php') ;?>
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
       

        <!-- Main content -->
        <section class="content">
		   <!-- Date dd/mm/yyyy -->
					<!------------THE END OF DATE FOR PRODUK----------->

				  
				  <!-----THE END OF THE DATE------>
          <div class="row">
			<!----------------KONTEN TABEL 1--------------------------------->
			<div class="col-md-12">
			    <div class="box box-success">
				   
                <div class="box-header ">
				<div class="text-center">
                <h3 class="box-title  " ><strong> <?php echo $nama;?></strong></h3>
				</div>
				 
				  
                </div><!-- /.box-header -->
				
                <div class="box-body box-info">
					  <ul class="nav nav-tabs" id="myTab">
		<li class="dropdown">
          <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Kelas X <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
            <li><a href="#sem1" tabindex="-1" data-toggle="tab">Semester 1</a></li>
            <li><a href="#sem2" tabindex="-1" data-toggle="tab">Semester 2</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Kelas XI <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
            <li><a href="#sem3" tabindex="-1" data-toggle="tab">Semester 3</a></li>
            <li><a href="#sem4" tabindex="-1" data-toggle="tab">Semester 4</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Kelas XII <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
            <li><a href="#sem5" tabindex="-1" data-toggle="tab">Semester 5</a></li>
            <li><a href="#sem6" tabindex="-1" data-toggle="tab">Semester 6</a></li>
          </ul>
        </li>
</ul>


<div class="tab-content">
  <div class="tab-pane fade in active" id="sem1">
  <!-------------THE BEGINNING OF CONTEN JAVASCRIPT ---------------->
    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pelajaran</th>
                        <th>Nilai</th>
                       
                        
                       
                      </tr>
                    </thead>
						<?php
$no=1;
$result = mysqli_query($con,"SELECT * FROM nilai JOIN mapel WHERE siswa_username='$username' AND Mapel_idMapel=idMapel AND Semester=1") 
or die(mysqli_error());  


// output data of each row
while($row = mysqli_fetch_assoc( $result )) {
  
?>
				
                    <tbody>
                     <tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['namaPelajaran'] ?></td>
<td><?php echo $row['Nilai']  ?></td>





</tr>
<?php } ?>   

                    </tbody>
					
                  </table>
				  <?php if ($level=='admin'){?>
				  <a type="button" class="btn btn-success" href="edit_nilai.php?usernameget=<?php echo $user?>&Semester=<?php echo $Semester;?>">EDIT</a>
				  
				  <?php } ?>
				  <!-------------------THE ENDING OF KONTEN JAVASCRIPT TAB--------->
  
  </div>
  <div class="tab-pane fade" id="sem2">
  <!-------------THE BEGINNING OF CONTEN JAVASCRIPT ---------------->
  
    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Siswa</th>
                      
                      </tr>
                    </thead>
						<?php
$no=1;
$result = mysqli_query($con,"SELECT * FROM nilai JOIN mapel WHERE siswa_username='$usernameget' AND Mapel_idMapel=idMapel AND Semester=2") 
or die(mysqli_error());  


// output data of each row
while($row = mysqli_fetch_assoc( $result )) {
  
?>

					  <tbody>
                     <tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['namaPelajaran'] ?></td>
<td><?php echo $row['Nilai'] ?></td>


</tr>

<?php } ?>   
                    </tbody>
                  </table>
				  
				   <?php if ($level=='admin'){?>
				  <a type="button" class="btn btn-success" href="edit_nilai.php?usernameget=<?php echo $user?>&Semester=<?php echo $Semester;?>">EDIT</a>
				  
				  <?php } ?>
				  <!-------------------THE ENDING OF KONTEN JAVASCRIPT TAB--------->
  
  </div>
  <div class="tab-pane fade" id="sem3">
  <!-------------THE BEGINNING OF CONTEN JAVASCRIPT ---------------->
  
    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Siswa</th>
                       
                     
                      </tr>
                    </thead>
						<?php
$no=1;
$result = mysqli_query($con,"SELECT * FROM nilai JOIN mapel WHERE siswa_username='$username' AND Mapel_idMapel=idMapel  AND Semester=2") 
or die(mysqli_error());  


// output data of each row
while($row = mysqli_fetch_assoc( $result )) {
  
?>
					
                    <tbody>
                     <tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['namaPelajaran'] ?></td>
<td><?php echo $row['Nilai'] ?></td>


</tr>

<?php } ?>   
                    </tbody>
                  </table>
				   <?php if ($level=='admin'){?>
				  <a type="button" class="btn btn-success" href="edit_nilai.php?usernameget=<?php echo $user?>&Semester=<?php echo $Semester;?>">EDIT</a>
				  
				  <?php } ?>
				  <!-------------------THE ENDING OF KONTEN JAVASCRIPT TAB--------->
  </div>
  <div class="tab-pane fade" id="sem4">
  <!-------------THE BEGINNING OF CONTEN JAVASCRIPT ---------------->
  
    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Siswa</th>
                       
                    
                       
                      </tr>
                    </thead>
						<?php
$no=1;
$result = mysqli_query($con,"SELECT * FROM nilai JOIN mapel WHERE siswa_username='$username' AND Mapel_idMapel=idMapel") 
or die(mysqli_error());  


// output data of each row
while($row = mysqli_fetch_assoc( $result )) {
  
?>
					
                    <tbody>
                     <tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['namaPelajaran'] ?></td>
<td><?php echo $row['Nilai'] ?></td>


</tr>

<?php } ?>   
                    </tbody>
                  </table>
				   <?php if ($level=='admin'){?>
				  <a type="button" class="btn btn-success" href="edit_nilai.php?usernameget=<?php echo $user?>&Semester=<?php echo $Semester;?>">EDIT</a>
				  
				  <?php } ?>
				  <!-------------------THE ENDING OF KONTEN JAVASCRIPT TAB--------->
  
  </div>
</div>
 </div>

<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
				
                
				  
			
                </div><!-- /.box-body -->
              </div><!-- /.box -->
           </div> 
			<!---------------THE END OF TABEL KONTEN----------------------->
			
			
				<!----------------KONTEN TABEL 2--------------------------------->
		
           </div>
			<!---------------THE END OF TABEL KONTEN 2----------------------->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php require'../layout/footer.php' ?>
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="../plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="../plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="../plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

  </body>
</html>
