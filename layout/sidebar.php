

	 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
		
			<?php
			$query=mysqli_query($con,"SELECT * FROM images_tbl WHERE username ='$username' ORDER BY images_id DESC LIMIT 1")
			or die(mysqli_error());
			while($row = mysqli_fetch_assoc($query)){
			?>
			
		<?php if ($level=='admin'){
		
		
		
		?>
		<img src="../process/images/admin.jpg" class="img-circle" alt="User Image" />
            </div>
		<?php
		}
		else{
		?>
		<?php if (!empty($_SESSION['jabatan'])){?>
		<img src="../process/images/25-05-2015-1432559698.jpg" class="img-circle" alt="User Image" />
		<?php } else {?>
              <img src="../process/<?php echo $row['images_path'] ?>" class="img-circle" alt="User Image" />
			  <?php } ?>
            </div>
			<?php } ?>
			<?php } ?>
            <div class="pull-left info">
             <p><?php echo $id ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
		  
    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
			<?php if ($level=='admin'){?>
            <li class="treeview  <?php echo $table_member;?>">
              <a href="../pages/table_member.php">
                <i class="fa fa-list-alt"></i> <span>Edit Member</span>
              </a>
            </li>
            <li class="treeview <?php echo $table_nilai;?>">
              <a href="../pages/table_nilai.php">
                <i class="fa fa-list"></i> <span>Edit Nilai</span>
              </a>
            </li>
			<?php } 
			if ($level=='siswa'){?>
			
			  <li class="treeview  <?php echo $table_score;?>">
              <a href="../pages/table_score.php?username=<?php echo $username ;?>">
                <i class="fa fa-list-alt "></i> <span>My Score</span>
              </a>
            </li>
			
			<?php if (!empty($_SESSION['jabatan'])){
			}
			else{?>
            <li class="treeview <?php echo $table_profil;?>">
              <a href="../pages/table_profil.php?username<?php echo $username;?>">
                <i class="fa fa-list"></i> <span>My Profile</span>
              </a>
            </li>
			 <?php };?>
			 <li class="treeview <?php echo $table_chart;?>">
              <a href="../pages/table_chart.php">
                 <i class="fa fa-dashboard"></i> <span>My Performance</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
			     <ul class="treeview-menu">
                <li class="<?php echo $chart_bi;?>"><a href="../pages/table_chart1.php"><i class="fa fa-circle-o"></i> Bahasa Indonesia</a></li>
                <li class="<?php echo $chart_ma;?>"><a href="../pages/table_chart2.php"><i class="fa fa-circle-o"></i> Matematika</a></li>
                <li class="<?php echo $chart_fi;?>"><a href="../pages/table_chart3.php"><i class="fa fa-circle-o"></i> Fisika</a></li>
                <li class="<?php echo $chart_bing;?>"><a href="../pages/table_chart4.php"><i class="fa fa-circle-o"></i> Bahasa Inggris</a></li>
                <li class="<?php echo $chart_kim;?>"><a href="../pages/table_chart5.php"><i class="fa fa-circle-o"></i> Kimia</a></li>
                <li class="<?php echo $chart_bo;?>"><a href="../pages/table_chart6.php"><i class="fa fa-circle-o"></i> Biologi</a></li>
               
              </ul>
            </li>

			<?php if (!empty($_SESSION['jabatan'])){?>
			 <li class="treeview <?php echo $table_chart;?>">
              <a href="../pages/index_dosen.php">
                <i class="fa  fa-mail-reply-all"></i> <span>Go Back</span>
              </a>
			  
            </li>
			 <li class="treeview <?php echo $table_chart;?>">
              <a href="../pages/table_score.php?usernameget=<?php echo $username;?>">
                <i class="fa  fa-mail-reply-all"></i> <span>Go To Table Score</span>
              </a>
			  
            </li>
			<?PHP}
			else{?>
         
			 <?php };?>
			
			
			<?php }
			 ?>
		<?php if (!empty($non)) {?>
			
			<li class="treeview  <?php echo $table_score;?>">
              <a href="../pages/table_score.php?usernameget=<?php echo $username;?>">
                <i class="fa fa-list-alt "></i> <span>Score</span>
              </a>
            </li>
			 <li class="treeview <?php echo $table_chart;?>">
              <a href="../pages/table_chart.php">
                 <i class="fa fa-dashboard"></i> <span>Performance</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
			     <ul class="treeview-menu">
                <li class="<?php echo $chart_bi;?>"><a href="../pages/table_chart1.php?usernameget=<?php echo $username;?>"><i class="fa fa-circle-o"></i> Bahasa Indonesia</a></li>
                <li class="<?php echo $chart_ma;?>"><a href="../pages/table_chart2.php?usernameget=<?php echo $username;?>"><i class="fa fa-circle-o"></i> Matematika</a></li>
                <li class="<?php echo $chart_fi;?>"><a href="../pages/table_chart3.php?usernameget=<?php echo $username;?>"><i class="fa fa-circle-o"></i> Fisika</a></li>
                <li class="<?php echo $chart_bing;?>"><a href="../pages/table_chart4.php?usernameget=<?php echo $username;?>"><i class="fa fa-circle-o"></i> Bahasa Inggris</a></li>
                <li class="<?php echo $chart_kim;?>"><a href="../pages/table_chart5.php?usernameget=<?php echo $username;?>"><i class="fa fa-circle-o"></i> Kimia</a></li>
                <li class="<?php echo $chart_bo;?>"><a href="../pages/table_chart6.php?usernameget=<?php echo $username;?>"><i class="fa fa-circle-o"></i> Biologi</a></li>
               
              </ul>
            </li>
			
			
			
			
			
			<?php } 
			else{}?>
			<?php if (!empty($_SESSION['jabatan'])) {?>
			
			
			 <li class="treeview <?php echo $table_chart;?>">
              <a href="../pages/index_dosen.php">
                <i class="fa  fa-mail-reply-all"></i> <span>Go Back</span>
              </a>
			  
            </li>
			
			<?php }else {} ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
	  
	