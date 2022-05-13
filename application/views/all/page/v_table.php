<style>
    .vvv{
      font-size:12px;
      background-color: white;
	  text-align:center;
    }
    .vvv2{
      color:black;
      background-color: white;
      padding: 30px;
      border-radius:10px;
    }
	.button1 {
		padding: 5px;
		width: 40px;
		}
</style>
		
		
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span class="light-logo"><img src="<?php echo base_url();?>./help/page/img/xnxx.png"height="20" alt="logo"></span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	      
	<div class=" vvv2">
    <table id="myTable" class="display vvv" style="width: 100%;">
    <thead>
  <tr>
    <th>Username</th>
    <th>Password</th>
    <th>Name</th>
    <th>Group</th>
    <th>Status</th>
    <th>Date Created</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
												
		<?php
	  		$list_user = array_filter($list_user);
					if (!empty($list_user)) {
						 foreach ($list_user as $user_detail){
							 if ($user_detail['del_flag'] == '1'){ 
								if ($user_detail['enable'] == '1'){ 
									$txt_status = '<span class="label label-sm label-success">Enable</span>'; 
									$txt_color = '#0EC952';
													  
								}else{
									$txt_status = '<span class="label label-sm label-warning">Disable</span>'; 
									$txt_color = '#FF0000'; 
									 }?>
				<tr>
				<td><?php echo $user_detail['username'];?></td>
				<td><?php echo $user_detail['password'];?></td>
				<td><?php echo $user_detail['firstname'].'  '.$user_detail['lastname'];?></td>
				<td style="text-align:center;"><?php echo $user_detail['group_name'];?></td>
				<td style="text-align:center;"><?php echo '<span style="color:'.$txt_color.'">'.$txt_status.'</span>';?></td>
				<td style="text-align:center;"> <?php echo date('Y-m-d H:i:s', strtotime($user_detail['date_create']));?></td>
				<td>
				<a data-original-title='Rule' onclick="javascript:window.location='<?php echo base_url().'user/rule/'.$user_detail['su_id'];?>';">
                <button class="btn bg-success button1"><i class="fas fa-edit "></i></button>
              	</a>
			<?php
				if($user_detail['enable'] == 1){?>
					<a data-original-title='Disable' onclick="javascript:window.location='<?php echo base_url().'User/disable/'.$user_detail['su_id'];?>';">
                    <button class="btn bg-secondary button1"><i class="fas fa-user-alt-slash"></i></button>
              		</a>											
			<?php }else{ ?>
					<a data-original-title='Enable' onclick="javascript:window.location='<?php echo base_url().'user/enable/'.$user_detail['su_id'];?>';">
                    <button class="btn bg-warning button1"><i class="fas fa-user-alt"></i></button>
              		</a>										
			<?php } ?>
					<a data-original-title='Delete' onclick="javascript:if(confirm('คุณต้องการลบรายการนี้ใช่หรือไม่?')){ window.location='<?php echo site_url('table/delete/').$user_detail['su_id'];?>'; }else{ return false; }">
                    <button class="btn bg-danger button1"><i class="fas fa-trash-alt "></i></button>
              		</a>
				</td>
				</tr>
			<?php }} } ?>
			</tbody>
    </table>
</div>
	</section>
    <!-- /.content -->
  </div>