<style>
	select {
		border: 1px solid;
		font-size: 16px;
		padding: 6px;
		border-radius: 3px;
		color: #8a97a0;
		width: 100%;
		box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
	}



	.container {
		max-width: 50%;
	}

</style>
<div class="content-wrapper pa"style="padding-bottom:30px">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<span class="light-logo"><img src="<?php echo base_url(); ?>./themes/softmat/img/xnxx.png" height="20"
				alt="logo"></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="breadcrumb-item active">user</li>
			<li class="breadcrumb-item active">add_user</li>
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
				<h1 class="font">Add User</h1>
				<?php echo form_open('user/add', array('id' => 'smart-form-register', 'class' => 'form-horizontal')); ?>
				<div class="form-group">
					<label>Username:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
						<input type="txt_user" class="form-control" name="user" placeholder="Username"
							value="<?php echo set_value('user'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input class="form-control" name="pass" type="password" placeholder="Password"
						value="<?php echo set_value('pass'); ?>">
				</div>
				<div class="form-group">
					<label>Firstname</label>
					<input class="form-control" name="fname" type="text" placeholder="Firstname"
						value="<?php echo set_value('fname'); ?>">
				</div>
				<div class="form-group">
					<label>Lastname:</label>
					<input class="form-control" name="lname" type="text" placeholder="Lastname"
						value="<?php echo set_value('lname'); ?>">
				</div>
				<div class="form-group">
					<label>Sex:</label>
					<input type="radio" id="under_13" name="u_sex" value="male"
						<?php echo set_radio('u_sex', 'male', TRUE); ?>><label for="under_13" class="light">male</label>
					<input type="radio" id="over_13" name="u_sex" value="female"
						<?php echo set_radio('u_sex', 'female'); ?>><label for="over_13" class="light">female</label>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input class="form-control" name="email" type="email" placeholder="E-mail"
						value="<?php echo set_value('email'); ?>">
				</div>

				<div class="form-group">
  
					<label>Group:</label><br>
					<?php
          $optName = array();

          $optName['0'] = '-- Select Groups --';
          foreach ($excLoadG->result() as $g) {
            if ($g->{'del_by'} == '1'); {
              $optName[$g->sug_id] = $g->name;
            }
          }
          $selected = (set_value('sel_group')) ? set_value('sel_group') : '-- Select Groups --';
          if (form_error('sel_group')) {
            $setErrSel = "class='err'";
          }
          echo form_dropdown('sel_group', $optName,  $selected/*, $setErrSel*/);
          ?>

				</div>


				<input type="hidden" name="action" value="<?php echo base64_encode('addUser'); ?>" />
				<div class="form-group">
					<footer style="padding-top:20px;">
						<button type="submit" class="bgc btn btn-primary">
							Add
						</button>
					</footer>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
