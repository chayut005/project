<style>


  .box {
    width: 20%;
  }

  .box2 {
    width: 25%;
  }

  .box3 {
    width: 35%;
  }


  .container {
    max-width: 50%;
  }
</style>
<div class="content-wrapper pa">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <span class="light-logo"><img src="<?php echo base_url(); ?>./themes/softmat/img/xnxx.png" height="20" alt="logo"></span>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <!--<li class="breadcrumb-item active">Dashboard</li>-->
      <li class="breadcrumb-item active">groups</li>
      <li class="breadcrumb-item active">user_group</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php if ($str_validate == FALSE) {
      echo validation_errors();
    } ?>
    <?php if ($this->session->flashdata('msgResponse') != '') {
      echo $this->session->flashdata('msgResponse');
    } ?>
    <div class="container">
      <div id="hiddenForm" class="col-sm-12 hidden-print vvv2">
        <h1 class="font">Change Password</h1>
        <?php echo form_open('account/password'); ?>
        <div class="form-group">
          <label>Username:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
            <input type="txt_user" class="form-control" name="text" placeholder="Username" value="<?php echo $this->session->userdata('sessUsr'); ?>" readonly>
          </div>
          <div class="form-group">
            <label>Old Password:</label>
            <input class="form-control" name="txt_oldpwd" type="password" placeholder="Old" value="<?php echo set_value('txt_oldpwd'); ?>">
          </div>
          <div class="form-group">
            <label>New Password:</label>
            <input class="form-control" name="txt_newpwd" type="password" placeholder="New" value="<?php echo set_value('txt_newpwd'); ?>">
          </div>
          <div class="form-group">
            <label>Confirm Password:</label>
            <input class="form-control" name="txt_cfpwd" type="password" placeholder="Confirm" value="<?php echo set_value('txt_cfpwd'); ?>">
          </div>
          <input type="hidden" name="action" value="<?php echo base64_encode('changepassword'); ?>" />
          <div class="form-group">
            <footer style="padding-top:20px;">
              <button type="submit" class="bgc btn btn-primary">
                Change Password
              </button>
            </footer>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
  </section>
  <!-- /.content -->

</div>