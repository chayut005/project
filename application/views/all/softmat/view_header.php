<style>
    .fi{
    position: fixed;

    width: 100%;
    top: 0;
  }
</style>
<div class="nav">
  <header class=" main-header fi">
    <a href="<?php echo site_url('manage/helpdesk'); ?>" class="logo">
      <!-- mini logo -->
	  <b class="logo-mini sizeimg">
    <span class="light-logo"><img src="<?php echo base_url(); ?>./themes/softmat/img/xxx2.png" alt="logo"></span>
      <span class="dark-logo"><img src="<?php echo base_url(); ?>./themes/softmat/img/xxx3.png" alt="logo"></span>
	  </b>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
	  	
      <!-- Sidebar toggle button-->
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu">
			<span class="sr-only"></span>
		  </a>	
		
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  		
		  
          <!-- Messages -->
 
          <!-- Notifications -->
    
          <!-- Tasks-->
     
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://i1.sndcdn.com/avatars-000609285429-droihf-t500x500.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="https://i1.sndcdn.com/avatars-000609285429-droihf-t500x500.jpg" class="float-left rounded-circle" alt="User Image">

                <p style="padding-top:30px">
                <?php echo $this->session->userdata('sessName');?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="<?php echo site_url('account/editprofile'); ?>"><i class="ion ion-person"></i> My Profile</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="<?php echo site_url('manage/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  </div>
