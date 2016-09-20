<!DOCTYPE html>

<?php

$table_profil='active';






?>


<?php
include'../layout/identifier.php';
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
			
			<div class="col-md-8">
			    <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Siswa</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				
				<?php 
				$query= mysqli_query($con,"SELECT *FROM siswa WHERE username='$username'")
				or die(mysqli_error());
				
				while($row = mysqli_fetch_assoc($query)){
				?>
				
                <form role="form" action="../process/edit_profil.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text"  disabled value="<?php echo $row['username'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
					   <div class="form-group">
                      <label for="exampleInputPassword1">Type your Old Password</label>
                      <input type="password" name="lamapassword"   class="form-control" id="exampleInputPassword1" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Type your New Password</label>
                      <input type="password" name="oldpassword"   class="form-control" id="exampleInputPassword1" placeholder="New Password">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputPassword1">Verification</label>
                      <input type="password" name="password"   class="form-control" id="exampleInputPassword1" placeholder="Verify Password">
                    </div>
                  <?php  if (isset($_GET['gagal'])){
				  
				  if($_GET['gagal']=='true'){
				  ?>
				     <label style="color:red" for="exampleInputPassword1">Your Password didnt match!</label>
					 <?php }
							else{?>
							 <label style="color:rgb(22, 218, 250)" for="exampleInputPassword1">Password Changes</label>
							
							
							<?php }
							}
							else {}
							?>
					 
                    
                  </div><!-- /.box-body -->
<?php } ?>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
			

              </div><!-- /.box -->
              </div><!-- /.box -->
			  <div class="col-md-3">
			    <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Profile Picture</h3>
                </div><!-- /.box-header -->
				<div class="box-body">
				
			  <form action="../process/saveimage_process.php" enctype="multipart/form-data" method="post">
	<?php
			$query=mysqli_query($con,"SELECT * FROM images_tbl WHERE username ='$username' ORDER BY images_id DESC LIMIT 1")
			or die(mysqli_error());
			while($row = mysqli_fetch_assoc($query)){
			?>
	 
  <div class="form-group">
                      
					  <img width="200px" src="../process/<?php echo $row['images_path'];?>" alt="..." class="img-rounded">
<?php } ?>                     
					 <input type="file" required name="uploadedimage" id="exampleInputFile">
                    
                    </div>
					 <div class="form-group">
<input class="btn btn-primary" name="Upload Now" type="submit" value="Upload Image">
</div>


</form>
			  
			  </div>
			  </div>
			  </div>
         <div class="col-md-1"></div>
			<!---------------THE END OF TABEL KONTEN----------------------->
		
			  </div>
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
