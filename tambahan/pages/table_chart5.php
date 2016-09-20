<!DOCTYPE html>
<?php
$table_chart='active';
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

     
					<!------------THE BEGINNING OF TABLE CHART----------->
   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Your Performance 
            <small>Based on chart</small>
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">
         
       
		  
		  
		          
              <!-- LINE CHART -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Kimia</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="line-chart1" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
           

          
		  
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       
				<!----------------KONTEN TABEL 2--------------------------------->
		
          
			<!---------------THE END OF TABEL KONTEN 2----------------------->
          </div><!-- /.row -->

       
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
	 <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js" type="text/javascript"></script>
    
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
	  
	   $(function () {
        "use strict";

          // AREA CHART
   

     
		 // LINE CHART kimia
        var line = new Morris.Line({
          element: 'line-chart1',
          resize: true,
		  parseTime:false,
          data: [
		  <?php
			$qr = mysqli_query($con,"SELECT * FROM nilai where siswa_username ='$username' AND Mapel_idMapel='5' ");
			while ($tod = mysqli_fetch_assoc($qr)) { 
		  ?>
            {year: '<?php echo $tod['Semester']?>', item1: '<?php echo $tod['Nilai']?>'},
		  <?php } ?>
          ],
          xkey: ['year'],
          ykeys: ['item1'],
          labels: ['Nilai'],
          lineColors: ['#ffdb01'],
          hideHover: 'auto'
		  
		  
        });
		
		
		 // LINE CHART Biologi
        var line = new Morris.Line({
          element: 'line-chart6',
          resize: true,
		  parseTime:false,
          data: [
		  <?php
			$qr = mysqli_query($con,"SELECT * FROM nilai where siswa_username ='$username' AND Mapel_idMapel='6' ");
			while ($tod = mysqli_fetch_assoc($qr)) { 
		  ?>
            {year: '<?php echo $tod['Semester']?>', item1: '<?php echo $tod['Nilai']?>'},
		  <?php } ?>
          ],
          xkey: ['year'],
          ykeys: ['item1'],
          labels: ['Nilai'],
          lineColors: ['#0099ff'],
          hideHover: 'auto'
		  
		  
        });
		
		
		
		
        //DONUT CHART
        var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#00a65a"],
          data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
          ],
          hideHover: 'auto'
        });
        //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart',
          resize: true,
          data: [
            {y: '6', a: 100, b: 90},
            {y: '7', a: 75, b: 65},
            {y: '2008', a: 50, b: 40},
            {y: '9', a: 75, b: 65},
            {y: '2010', a: 50, b: 40},
            {y: '2011', a: 75, b: 65},
            {y: '2012', a: 100, b: 90}
          ],
          barColors: ['#00a65a', '#f56954'],
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['CPU', 'DISK'],
          hideHover: 'auto'
        });
      });
	  
	  
	  
	  
	  
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
