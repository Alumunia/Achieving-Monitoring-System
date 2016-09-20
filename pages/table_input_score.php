<!DOCTYPE html>
<?php
		include '../koneksi.php';
include'../layout/identifier.php';
	
	$day = date("l");
	$date = date("j F Y");
	$tgl = date("Y-m-d");
	$pict = rand(1, 5);
	
	$getsemester=$_GET['Semester'];
	$username = $_GET ['usernameget'];
	$qry = mysqli_query($con,"SELECT * FROM nilai JOIN siswa WHERE username='$username' AND siswa_username='$username' ");
	$produk = mysqli_fetch_array($qry);
	$name=$produk['namaSiswa'];
	$Semester=$produk['Semester'];
	$table_nilai='active';
	
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
          <h1 style="color: rgb(42, 96, 57);">
           Tabel Edit Semester <?php echo $getsemester;?>
          </h1>
		  
		 
				 
        </section>

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
                <h3 class="box-title  " ><strong> <?php echo $name ?></strong></h3>
				</div>
				 
				  
                </div><!-- /.box-header -->
				
                <div class="box-body box-info">
		
						<form action="../process/submit_input_nilai.php?username=<?php echo $username ?>&Semester=<?php echo $getsemester; ?>" method="post">
						
						<div class="row no-print">
							
							
							<div class="box-body">
							<div class="col-md-6">
							<label>Nama Pelajaran</label>
							</div>
							<div class="col-md-6">
							<label>Nilai</label>
							</div>
								<?php
				$no=0;
				$result = mysqli_query($con,"SELECT * FROM mapel")
				or die(mysqli_error());
				//nilai nya di fecth broh
				while($row = mysqli_fetch_assoc($result)){
				?>
							<div class="row">
							  <div class="col-xs-6">
								<label></label>
								<input type="text"  disabled name="user" value="<?php echo $row['namaPelajaran'];?>" placeholder="Nama Training" autocomplete="off" class="form-control"/> 
								</div>
							 <div class="col-xs-6">
								<label></label>
							 <input name="Nilai[]" class="form-control" placeholder="Nilai"/>
							  </div>
							  </div>
							  <?php } ?>
							</div>
							  
							  <div class="col-md-12">
							  <input type="submit" class="btn btn-primary pull-right" value="Submit"/>
								<!----<a href="outcome_print.php" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>-->
							  </div>
							 
							
						</div>
					</form>
				
                
				  
					</div>
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
