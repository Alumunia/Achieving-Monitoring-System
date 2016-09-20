<!DOCTYPE html>
<?php
include'../layout/identifier.php';
$table_member='active';
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
        <section class="content-header">
          <h1>
           Tabel Edit 
          </h1>
		  
		 
				 
        </section>

        <!-- Main content -->
        <section class="content">
		   <!-- Date dd/mm/yyyy -->
					<!------------THE END OF DATE FOR PRODUK----------->

				  
				  <!-----THE END OF THE DATE------>
          <div class="row">
			<!----------------KONTEN TABEL 1--------------------------------->
			<div class="col-md-6">
			    <div class="box box-warning">
				   
                <div class="box-header ">
				<div class="text-center">
                <h3 class="box-title  " >Edit tabel Siswa</h3>
				</div>
				 
				  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
				    <!------------------FORM INPUT DATA MAHASISWA---------------------->
				  <div class="row">
				  <div class="col-md-2">
				  <form class="form-inline" role="form" method="post" action="../process/add_siswa_process.php">
					<div class="form-group">
					
					<input required type="text" name="nama" class="form-control" 2" placeholder="Username">
					</div>
					</div>
					<div class="col-md-2">
					<div class="form-group">
				
					<input required type="text" name="namaSiswa" class="form-control"  placeholder="Nama Siswa">
					</div>
					</div>
					<div class="col-md-2">
					<div class="form-group">
				
					<input required type="password" name="password" class="form-control"  placeholder="Password">
					</div>
					</div>
					<div class="col-md-2">
					<div class="form-group">
				
					<input required list="listkelas" type="int" name="kelas" class="form-control"  placeholder="kelas">
					<datalist id="listkelas">
					<option value="1"></option>
					<option value="2"></option>
					<option value="3"></option>
					
					</datalist>
					</div>
					</div>
					<div class="col-md-2">
					
					<button type="submit" value="submit" class="btn btn-info">Input</button>
					</div>
					</form>
					
				  </div>
				  </div>
				  
				  <!------------------THE END OF INPUT------------------>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        
                        <th>Action</th>
                       
                      </tr>
                    </thead>
						<?php
$no=1;
$result = mysqli_query($con,"SELECT * FROM siswa") 
or die(mysqli_error());  


// output data of each row
while($row = mysqli_fetch_assoc( $result )) {
  
?>
					
                    <tbody>
                     <tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row['username'] ?></td>
<td><?php echo $row['namaSiswa'] ?></td>
<td><?php echo $row['kelas'] ?></td>

<td><a type="button" class="btn btn-sm btn-warning"href="edit_member.php?usernameget=<?php echo $row['username']?>">edit</a>|<a type="button" class="btn btn-sm btn-danger" href="../process/delete_member.php?usernameget=<?php echo $row['username']?>">delete</a></td>

</tr>

<?php } ?>
                       
                   
                     
                     
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
           </div> 
			<!---------------THE END OF TABEL KONTEN----------------------->
			
			
				<!----------------KONTEN TABEL 2--------------------------------->
			<div class="col-md-6">
			    <div class="box box-danger">
				   
                <div class="box-header ">
				<div class="text-center">
                <h3 class="box-title  " >Edit tabel Dosen</h3>
				</div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
				  <!------------------FORM INPUT DATA GURU---------------------->
				  <div class="row">
				  <div class="col-sm-3">
				  <form class="form-inline" role="form" method="post" action="../process/add_guru_process.php">
					<div class="form-group">
					
					<input type="text" name="username12" class="form-control"  placeholder="Username">
					</div>
					</div>
					<div class="col-sm-3">
					<div class="form-group">
					
					<input type="text" name="nama12" class="form-control" placeholder="Nama">
					</div>
					</div>
					<div class="col-sm-3">
				<div class="form-group">
					
					<input type="password" name="password12" class="form-control" placeholder="Password">
					</div>
					</div>
					<div class="col-sm-2">
					
					<button type="submit"  value="submit" class="btn btn-info">Input</button>
					</div>
					</form>
				  </div>
				  </div>
				  
				  <!------------------THE END OF INPUT------------------>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>password</th>
                        <th>Action</th>
                       
                      </tr>
                    </thead>
						<?php
$no=1;
$hasil = mysqli_query($con,"SELECT * FROM admin") 
or die(mysqli_error());  


// output data of each row
while($baris = mysqli_fetch_assoc( $hasil )) {
  
?>
	
                    <tbody>
                     <tr>
<td><?php echo $no++; ?></td>
<td><?php echo $baris['username'] ?></td>
<td><?php echo $baris['nama'] ?></td>
<td><input type="password" name="username12" class="form-control" value="<?php echo $baris['password'];?>"  disabled></td>
	
<td><a type="button" class="btn btn-sm btn-warning" href="edit_guru.php?usernameget=<?php echo $baris['username']?>">edit</a>|<a type="button" class="btn btn-sm btn-danger" href="../process/delete_guru.php?usernameget=<?php echo $baris['username']?>">delete</a></td>

</tr>

<?php } ?>
                       
                      </tr>
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
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
