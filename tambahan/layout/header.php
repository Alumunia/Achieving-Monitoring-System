  
  	<?php
	
	
	$day = date("l");
	$date = date("j F Y");
	$tgl = date("Y-m-d");
	$pict = rand(1, 5);
	
	
	
	?>
  
  <a href="../../index.php" class="logo"><b></b> AMS</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
			  <li class="header">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="dropdown-toggle" data-toggle="dropdown"><?php echo $day." / ".$date ?></span>
                </a>
			  </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php
			$query=mysqli_query($con,"SELECT * FROM images_tbl WHERE username ='$username' ORDER BY images_id DESC LIMIT 1")
			or die(mysqli_error());
			while($row = mysqli_fetch_assoc($query)){
			?>
			
			
			<?php if($level=='admin'){
			?>
                   <img src="../process/images/admin.jpg" class="user-image" alt="User Image"/>
			              <?php } 
						  
						  else
						  
						  {
						  if ($row['username'] == NULL){
						  ?>
						  
						     <img src="../process/images/default.jpg" class="user-image" alt="User Image"/>
			        
						  
						  
						  
						  <?php } 
						  else{?>
						  
						   <img src="../process/<?php echo $row['images_path'] ?>" class="user-image" alt="User Image"/>
			        
						  
						  
						  
						  <?php } ?>
						  <?php } ?>
				 <span class="hidden-xs">@<?php echo $id ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../process/<?php echo $row['images_path'] ?>" class="img-circle" alt="User Image" />
                    <p>
					<?php } ?>  
                      @<?php echo $id ?>
                      <small><?php echo $level ?></small>
                      <small><?php echo $username ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>