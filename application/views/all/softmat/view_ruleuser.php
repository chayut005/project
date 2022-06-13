<style>
	   .vvv2{
        color:black;
        background-color: white;
        padding: 30px;
        border-radius:10px;
      }
	  .container{
        max-width:50%;
		} 
</style>
<div class="content-wrapper pa">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span class="light-logo"><img src="<?php echo base_url();?>./themes/softmat/img/xnxx.png"height="20" alt="logo"></span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <!--<li class="breadcrumb-item active">Dashboard</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


						<?php if($str_validate==FALSE){ echo validation_errors(); } ?>
						<?php if ($this->session->flashdata('msgResponse') != ''){ echo $this->session->flashdata('msgResponse'); } ?>
			<div class="container">
				<div class="vvv2">
					
						<!-- Widget ID (each widget will need unique ID)-->
						<div class="jarviswidget"  data-widget-editbutton="false" data-widget-custombutton="false">

								<div>

									<?php echo form_open('user/rule/'.$uid.'');?>	

				
					           			
											<section>

												<div class="input-group">
													<span class="input-group-addon"><i class="icon-append fa fa-user"></i></span>
													<input type="text" class="form-control" placeholder="Permission Name" value="<?php echo $recLoadUser['username'];?>" readonly style="background-color: #d7d7d7;">
												</div>



											</section>

											<section>
                                                <?php
                                            foreach($excPerG->result() as $pg){ 
													$i = 1;
												?>			
												
											<table class="checkbox">
											<input type="checkbox" name="chkRid[]" value="<?php echo $pg->sp_id;?>" id="subscription.<?php echo $pg->sp_id;?>"<?php if(in_array($pg->sp_id, $excRule)===true){ echo 'checked="checked"';}?> />
											<label for="subscription.<?php echo $pg->sp_id;?>"><?php echo $pg->name;?></label>
											</table>	
														<?php $i++; } ?>
											</section>
											
										

										<p>&nbsp;</p>
										<footer>
											<button type="submit" class="bgc btn btn-primary">
												Save
											</button>
											<input type="hidden" name="action" value="<?php echo base64_encode('saveRuleUser');?>"  />
										</footer>

					           		<?php echo form_close();?>
									</div>
								</div>
	</section>
    <!-- /.content -->
  </div>
