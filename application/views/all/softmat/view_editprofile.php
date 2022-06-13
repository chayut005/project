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
		<span class="light-logo"><img src="<?php echo base_url();?>./themes/softmat/img/xnxx.png" height="20"
				alt="logo"></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<!--<li class="breadcrumb-item active">Dashboard</li>-->
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<?php if ($this->session->flashdata('msgError') != ''){ echo $this->session->flashdata('msgError'); } ?>
		<?php if ($this->session->flashdata('msgResponse') != ''){ echo $this->session->flashdata('msgResponse'); } ?>
		<div class="container">
			<div id="hiddenForm" class="col-sm-12 hidden-print vvv2">
				<h1 class="font">Edit Profile</h1>
				<?php echo form_open('account/editprofile', array('id'=>'smart-form-register', 'class'=>'smart-form'));?>
				<div class="form-group">
					<label>Username:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
						<input type="text" class="form-control" name="txt_user" placeholder="Username"
							value="<?php echo $this->session->userdata('sessUsr');?>" readonly>
					</div>
					<div class="form-group">
						<label>Firstname:</label>
						<input class="form-control" name="txt_fname" type="text" placeholder="First name"
							value="<?php echo $recLoadUser['firstname'];?>">
					</div>
					<div class="form-group">
						<label>Lastname</label>
						<input class="form-control" name="txt_lname" type="text" placeholder="Last name"
							value="<?php echo $recLoadUser['lastname'];?>">
					</div>
					<div class="form-group">
						<label>Sex:</label>
						<input class="ace" type="radio" id="under_13" value="male" name="u_sex"
							<?php if($recLoadUser['gender']=='male'){ echo 'checked="checked"';} ?>><label for="under_13">male</label>
						<input class="ace" type="radio" id="over_13" value="female" name="u_sex"
							<?php if($recLoadUser['gender']=='female'){ echo 'checked="checked"';} ?>><label
							for="over_13">female</label>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input class="form-control" name="txt_email" type="email" placeholder="E-mail"
							value="<?php echo $recLoadUser['email'];?>">
					</div>
					<input type="hidden" name="action" value="<?php echo base64_encode('editprofile');?>" />
					<div class="form-group">
						<footer style="padding-top:20px;">
							<button type="submit" class="bgc btn btn-primary">
								Edit Profile
							</button>
						</footer>
					</div>
					<?php echo form_close();?>
				</div>
			</div>
	</section>
	<!-- /.content -->
</div>
