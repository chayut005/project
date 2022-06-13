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
      .font{
        font-family: Times;
        font-style: italic;
        font-weight: bold;
        text-align:center;
      }
      select {
      border: none;
    }  
</style>
<div class="content-wrapper pa">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span class="light-logo"><img src="<?php echo base_url();?>./themes/softmat/img/xnxx.png"height="20" alt="logo"></span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <!--<li class="breadcrumb-item active">Dashboard</li>-->
        <li class="breadcrumb-item active">groups</li>
        <li class="breadcrumb-item active">user_group</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

			
		

    <div class="row">
									<div class="col-xs-12">

										


										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										</div>
										<!-- <?php if ($this->session->flashdata('msgError') != ''){ echo $this->session->flashdata('msgError'); } ?>
										<?php if ($this->session->flashdata('msgResponse') != ''){ echo $this->session->flashdata('msgResponse'); } ?> -->
										<div class="vvv2">
											


                    <h1 style="text-align:center;" class="font">User Groups</h1>

										<table id="datatable"  class="table vvv"style="width:100%">
    <thead>
        <tr>
		<!-- <th class="detail-col">No</th> -->
		<th>Name</th>
		<th>Status</th>
		<!-- <th class="hidden-480">Action</th> -->
  </tr>
    </thead>

  </table>
									
                          </div>





<!-- --------------------------------------------------------------modal--------Add_group-------------------------------------------------- -->






<div id="modal_Gadd" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal" aria-hidden="true"></button>
          <h2 class="font">Add Permissiongroup</h2>	
        </div>
<div class="modal-body">
<?php echo form_open('manage_group/add', array('id'=>'smart-form-register', 'class'=>'smart-form'));?>
											<h2 class="font">Add Groups</h2>
										<fieldset>
										
										
											<div class="">
										<div class="input-group">
										 <span class="input-group-addon"><i class="icon-append fa fa-group"></i></span>

										 <input name="txt_name" type="text" class="form-control"  placeholder="Usergroup Name">

										</div>

														<label>Status :
												<input type="radio" id="under_13"  name="rad_status"value="1" <?php echo set_radio('rad_status', '1', TRUE); ?>><label for="under_13">Enable</label>
												<input type="radio" id="over_13"  name="rad_status"value="0"<?php echo set_radio('rad_status','0'); ?>><label for="over_13">Disable</label>
												</label>
												
												
											
									</fieldset>
									<footer>
										<button type="submit" class="btn btn-primary">
											Add
										</button>
										<input type="hidden" name="action" value="<?php echo base64_encode('addUsergroup');?>"  />
									</footer>
                      </div>
								<?php echo form_close(); ?>
</div>
      </div>
    </div>
  </div>















<!-- --------------------------------------------------------------modal--------Edit_group-------------------------------------------------- -->











<div id="modal_Gedit" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal" aria-hidden="true"></button>
          <h2 class="font">Edit Permissiongroup</h2>	
        </div>
<div class="modal-body">
<?php echo form_open('manage_group/edit/', array('id'=>'smart-form-register', 'class'=>'smart-form'));?>
                <h2 class="font">Add Groups</h2>
                <div class="">
									<fieldset>

										<div class="input-group">

										 <span class="input-group-addon"><i class="icon-append fa fa-group"></i></span>

										 <input name="txt_name" type="text"  class="form-control long" placeholder="Usergroup Name" id="g_name">
										 
										</div>

										
										<label>Status :

<input  type="radio" class="chk_end" checked="" id="enable_perGedit" name="rad_status" <?php echo set_radio('rad_status', '1', TRUE); ?>>
<label id="enable" for="enable_perGedit" >Enable</label>

<input  type="radio" id="disable_perGedit" checked="" class="chk_dis" name="rad_status"  <?php echo set_radio('rad_status','0'); ?>>
<label id="disable" for="disable_perGedit">Disable</label>
			  </label>
	
							
									</fieldset>
<div class="show_data">5555</div>
									<footer>
										<button type="submit" class="btn btn-primary">
											Save
										</button>
										<input type="hidden" name="action" value="<?php echo base64_encode('editUsergroup');?>"  />
									</footer>
                  </div>
								<?php echo form_close(); ?>
</div>
      </div>
    </div>
  </div>


<!-- ------------------------------------------------------------------end--modal-------------------------------------------------------- -->
      
	</section>
    <!-- /.content -->
  </div>
  <script>
	  
  function submit(para){
	  var part = $.ajax({
		  url:'<?php echo base_url();?>Manage_group/GET_MASTER_SYS_PERMISSION_GROUP',
		  type:"post"
		//   data:{
		// 	  id:para
		//   }
	  });

    part.done(function(data){
      var data2 = JSON.parse(data);
	  var text_html = "" 

		var part2 = $.ajax({
		  url:'<?php echo base_url();?>Manage_group/formedit_g',
		  type:"post",
		  data:{
			  id:para
		  }
	 	 });
	  part2.done(function(data_value){
		var result = JSON.parse(data_value);
    	 $.each(data2,function(key,value){
			text_html +="<input type='checkbox' id='vehicle1' name='vehicle1' value='"+ value.spg_id +"'>"
			text_html +="<label for='vehicle1'> "+ value.name  +"</label><br>"  
			$.each(result,function(key2,value2){
				
			})
			
      	});
	  	$(".show_data").html(text_html)
	  })
    });
  } 

    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
	$(document).ready(function() {
		var table=$('#datatable').DataTable({
			buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
                    order: [1, 'desc'],
                    lengthMenu: [
                        [5, 10, 25, 50],
                        [5, 10, 25, 'All'],
                    ],
					scrollX: true,
		ajax:{url:'<?php echo base_url(); ?>Manage_group/table_groups'},
		columns:[
				// {"data":"spg_id"},
				{"data":"name"},
				{"data":"enable"},
				// {"data":"fullname"},
				// {"data":"group_name"},
				// {"data":"enable"},
				// {"data":"date_create"},
				// {"data":"del_flag"},
			]
			})
		setInterval( function () {
 	    // table.ajax.reload();
		}, 1000 );
	});
</script>



























<!-- 

<tbody>
												
<?php
												 

												 $list_usergroup = array_filter($list_usergroup);

												 if (!empty($list_usergroup)) {
													  
												  
												 $i = 1;	  											  
												 foreach ($list_usergroup as $usergroup_detail){
													 if ($usergroup_detail['del_flag'] == '1'){

													 if ($usergroup_detail['enable'] == '1'){ 
													 
														 $txt_status = '<span class="label label-sm label-success">Enable</span>'; 
														 $txt_color = '#0EC952';
													 
													 }else{
														
													   $txt_status = '<span class="label label-sm label-warning">Disable</span>';
														 $txt_color = '#FF0000'; 
													   
													 }
											 
													
											   ?>
											   
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td><?php echo $usergroup_detail['name'];?></td>
													
				<td><?php echo '<span style="color:'.$txt_color.'">'.$txt_status.'</span>';?></td>
													
				<td>
				href="#modal_Gedit" data-toggle="modal"
				<a  data-target="#modal_Gedit" data-toggle="modal" onclick="submit(<?php echo $usergroup_detail['sug_id'];?>)">
               
               <button class="btn bg-success button1"><i class="fa fa-edit "></i></button>
               </a>
					<a data-original-title='Delete' onclick="javascript:if(confirm('คุณต้องการลบรายการนี้ใช่หรือไม่?')){ window.location='<?php echo base_url().'usergroup/delete/'.$usergroup_detail['sug_id'];?>'; }else{ return false; }">
                    <button class="btn bg-danger button1"><i class="fa fa-bitbucket "></i></button>
              		</a>
				</td>
				</tr>
			<?php $i++;}} } ?>
			</tbody> -->

























































			<?php defined('BASEPATH')OR exit('No direct script access allowed');

class Manage_group extends CI_Controller {

	private $theme; 
		 
	public function __construct()
	{
		parent::__construct();

		## asset config
		$theme = $this->config->item('theme');
		$this->theme = $theme; 

		$this->asset_url = $this->config->item('asset_url');
		$this->js_url = $this->config->item('js_url');
		$this->css_url = $this->config->item('css_url');
		$this->image_url = $this->config->item('image_url');
		

	
		$this->template->write('js_url', $this->js_url);
        $this->template->write('css_url', $this->css_url);
		$this->template->write('asset_url', $this->asset_url);
		$this->template->write('image_url', $this->image_url);
		

	}
	public function table_groups(){
		$datatable = $this->connect_db->datagroups();
		$table = array ("data" => $datatable);
		echo json_encode( $table ); 
	}
	public function groups(){
		$data['str_validate'] = '';
	
		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));


		$setTitle = strtoupper($this->router->fetch_method().' '.$this->router->fetch_class());	
		
		$this->template->write('page_title', 'TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php', $data);
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_group.php', $data);
		$this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();

	}

	public function add(){

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

		$action = base64_decode($this->input->post('action'));

		if($action=='addUsergroup'){

			$p['name'] = $this->input->post('txt_name');
			$p['enable'] = trim($this->input->post('rad_status'));

			$this->load->library('form_validation');	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');				
			
			$this->form_validation->set_rules('txt_name', 'Usergroup name', 'trim|required');
			$this->form_validation->set_rules("rad_status", "", "trim");
						
			$this->form_validation->set_message('required', '%s ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย');        																
			
			if($this->form_validation->run() == FALSE){
				
				$this->session->set_flashdata('msgError', validation_errors());
				redirect('manage_group/groups/');
								
			}else{# form_validation = TRUE

				$result = $this->connect_db->AddUserGroup($p['name'],$p['enable']);
				
				if($result!=FALSE){
						
					$sqlSel = "SELECT MAX(sug_id) AS sug_id FROM sys_user_groups;";
					$excSel = $this->db->query($sqlSel);
					$recSel = $excSel->result_array();
					
					$this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Add data success.</div>');
					redirect('manage_group/groups/'.$recSel[0]['sug_id']);
					
				}else{
					

					$this->session->set_flashdata('msgResponse','<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Add data not found.</div>');
					redirect('manage_group/groups');
					
				}


			}

		}

	}
	public function formedit_g(){
		$num1=$_POST["id"];
		$sqlSel = "SELECT * FROM sys_user_groups WHERE sug_id='{$num1}';";
		$excSel = $this->db->query($sqlSel);
		$numSel = $excSel->result_array();
		echo json_encode($numSel);
	}
	public function GET_MASTER_SYS_PERMISSION_GROUP(){
		$sqlSel = "SELECT * FROM sys_permission_groups ";
		$excSel = $this->db->query($sqlSel);
		$numSel = $excSel->result_array();
		echo json_encode($numSel);
	}
	public function edit($ugid){

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

		$action = base64_decode($this->input->post('action'));

		if($action=='editUsergroup'){
			// var_dump($this->input->post('chkRid'));
			// exit();
			$p['key'] = $ugid;
			
			// var_dump($this->input->post('chkRid'));
			
			$p['usr'] = trim($this->input->post('txt_name'));
			$p['rule'] = $this->input->post('chkRid');
			// var_dump($p['rule']); exit();
			$p['enable'] = $this->input->post('rad_status');
			$p['saveapply'] = $this->input->post('btn_saveapply');

			$this->load->library('form_validation');	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');				
			
			$this->form_validation->set_rules('txt_name', 'Usergroup name', 'trim|required');
			$this->form_validation->set_rules("rad_status", "", "trim");
						
			$this->form_validation->set_message('required', '%s ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย');        																
			
			if($this->form_validation->run() == FALSE){
				
				$this->session->set_flashdata('msgError', validation_errors());
				redirect('manage_group/groups/'.$ugid);

								
			}else{# form_validation = TRUE
				// exit();
				$resultSaveapply = TRUE;
				$resultEdit = $this->connect_db->EditUserGroup($p['key'],$p['usr'],$p['enable']);
				
				$resultAddRule = $this->connect_db->AddRuleUserGroup($p['key'],$p['rule']);

				if($resultEdit!=FALSE && $resultAddRule!=FALSE){

					$this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Save data success.</div>');
					redirect('manage_group/groups//'.$ugid);

				}else{

					$this->session->set_flashdata('msgResponse','<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Save data not found.</div>');
					redirect('manage_group/groups/');
				}



			}

		}
	}

	public function delete($ugid){

		$result = $this->connect_db->DeleteUserGroup($ugid);
			
		if($result!=FALSE){
				
			$this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-check"></i> <strong>ลบข้อมูลเรียบร้อย </strong><br />Success : Delete data success.</div>');
			redirect('manage_group/groups//');
			
		}else{
			
			$this->session->set_flashdata('msgResponse','<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Save data not found.</div>');
			redirect('manage_group/groups/');
			
		}
	}


}
