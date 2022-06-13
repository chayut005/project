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
	public function table_g(){
		$datatable = $this->connect_db->datagroups();
		$table = array ("data" => $datatable);
		echo json_encode( $table ); 
	}
	public function groups(){
		$data['str_validate'] = '';
	
		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));


		$sqlLoadUser = "SELECT * FROM sys_user_groups;";
		$excLoadUser = $this->db->query($sqlLoadUser);
		$recLoadUser = $excLoadUser->result_array();
		$data['list_usergroup'] = $recLoadUser;



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
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger "></div>');				
			$this->form_validation->set_rules('txt_name', 'Usergroup name', 'trim|required');
			$this->form_validation->set_rules("rad_status", "", "trim");

			if($this->form_validation->run() == FALSE){
				
				// $this->session->set_flashdata('msgError', validation_errors());
				// redirect('manage_group/groups/');
				echo "errorT";
								
			}else{# form_validation = TRUE

				$result = $this->connect_db->AddUserGroup($p['name'],$p['enable']);
				
				if($result!=FALSE){
						
					echo "suc";
					
				}else{
					echo "err";
					
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
	public function load_permission_by_id(){
		$id = $_REQUEST["id"];
		$sql = "SELECT
		sugp.spg_id ,
		sug.sug_id
	FROM
		sys_users_groups_permissions as sugp ,
		sys_user_groups as sug
	WHERE
		sugp.sug_id = sug.sug_id
		and sug.sug_id = '$id'";
		$query = $this->db->query($sql);
		$recLoadData = $query->result_array();
		echo json_encode($recLoadData);
		
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

	public function delete(){
		$id=$_POST["id"];
		$result = $this->connect_db->DeleteUserGroup($id);
			
		if($result!=FALSE){
				
			// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
			// 					<a class="close" data-dismiss="alert">
			// 						×
			// 					</a>
			// 					<i class="fa-fw fa fa-check"></i> <strong>ลบข้อมูลเรียบร้อย </strong><br />Success : Delete data success.</div>');
			// redirect('manage_group/groups//');
			echo "suc";
			
		}else{
			
			// $this->session->set_flashdata('msgResponse','<div class="alert alert-danger ">
			// 					<a class="close" data-dismiss="alert">
			// 						×
			// 					</a>
			// 					<i class="fa-fw fa fa-times"></i>
			// 					<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Save data not found.</div>');
			// redirect('manage_group/groups/');
			echo "error";
			
		}
	}


}
