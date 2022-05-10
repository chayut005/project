<style>
    .vvv{
      font-size:12px;
      background-color: white;
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
<link rel="stylesheet" type="text/css" href="fonts/style.css">
		<link rel="stylesheet" type="text/css" href="css/main-style.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<a data-original-title='Delete' onclick="javascript:if(confirm('คุณต้องการลบรายการนี้ใช่หรือไม่?')){ window.location='<?php echo base_url().'user/delete/'.$user_detail['su_id'];?>'; }else{ return false; }">
                    <button class="btn bg-danger button1"><i class="fas fa-trash-alt "></i></button>
              		</a>
				</td>
				</tr>
			<?php }} } ?>
			</tbody>
    </table>
</div>
