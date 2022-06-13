<?php defined('BASEPATH')OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		

		$this->img_path = $this->image_url;

		$this->template->write('js_url', $this->js_url);
        $this->template->write('css_url', $this->css_url);
		$this->template->write('asset_url', $this->asset_url);
		$this->template->write('image_url', $this->image_url);
		

	}
	public function table_user(){

		if($this->session->userdata('sessUsr') == 'sadmin'){

			$datatable = $this->connect_db->datauseradmin();

		}else{

			$datatable = $this->connect_db->datauser($this->session->userdata('sessUsr'));
		}


		// echo($this->session->userdata('sessUsr'));
		// $datatable = $this->connect_db->datauser();
		$table = array ("data" => $datatable);
		echo json_encode( $table ); 
	}
	public function manage(){
		
		$data['str_validate'] = '';
		$this->connect_db->checksession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

	
		

		if($this->session->userdata('sessUsr') == 'sadmin'){

			$sqlLoadUser = "SELECT su.*, sug.name AS group_name FROM sys_users AS su LEFT JOIN sys_user_groups AS sug ON su.sug_id = sug.sug_id;";
			$excLoadUser = $this->db->query($sqlLoadUser);

		}else{
			$sqlLoadUser = "SELECT su.*, sug.name AS group_name FROM sys_users AS su LEFT JOIN sys_user_groups AS sug ON su.sug_id = sug.sug_id WHERE su.sug_id<>'1' AND su.username<>'{$this->session->userdata('sessUsr')}';";
			$excLoadUser = $this->db->query($sqlLoadUser);
		}
		
		$recLoadUser = $excLoadUser->result_array();
		$data['list_user'] = $recLoadUser;
		$setTitle = strtoupper(str_replace('_', ' ', $this->router->fetch_method()));
		$this->template->write('page_title', ' TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php');
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/v_table.php', $data);
        $this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();

		}
		public function delete(){
			$id=$_POST["id"];
			$checkSess = $this->connect_db->CheckSession();
			$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));
			$result = $this->connect_db->deleteUser($id);
		
			if($result!=FALSE){
				echo "suc";
				// redirect('user/manage');	
			
			}else{
				// redirect('user/manage');
				echo "error";

				
			}
		}
		public function redelete(){
			$id=$_POST["id"];
			$checkSess = $this->connect_db->CheckSession();
			$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));
			$result = $this->connect_db->redeleteUser($id);
		
			if($result!=FALSE){
				// redirect('user/manage');	
				echo "suc";

			
			}else{
				// redirect('user/manage');
				echo "error";

				
			}
		}

		public function enable(){
			$id=$_POST["id"];
			$checkSess = $this->connect_db->CheckSession();
			$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));
	
			$result = $this->connect_db->enableUser($id);
		
			if($result!=FALSE){
				
				// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success "><a class="close" data-dismiss="alert">×</a><strong>เปิดการใช้งานเรียบร้อย </strong><br />Success : Enable data success.</div>');
				// redirect('user/manage');	
				echo "suc";
			
			}else{
				
				// $this->session->set_flashdata('msgResponse','<div style="color:red; text-align:center" class="alert alert ">
				// 					<a class="close" data-dismiss="alert">
				// 						×
				// 					</a>
									
				// 					<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถเปิดการใช้งานได้ <br />Error : Enable data not found.</div>');
				// redirect('user/manage');
				echo "error";

	
			}
		}
		public function disable(){
			$id=$_POST["id"];
			$checkSess = $this->connect_db->CheckSession();
			$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));
	
			$result = $this->connect_db->disableUser($id);
		
			if($result!=FALSE){
				
				// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success "><a class="close" data-dismiss="alert">×</a><strong>ระงับการใช้งานเรียบร้อย </strong><br />Success : Disable data success.</div>');
				// redirect('user/manage');	
				echo "suc";
			
			}else{
				
				// $this->session->set_flashdata('msgResponse','<div style="color:red; text-align:center" class="alert alert ">
				// 					<a class="close" data-dismiss="alert">
				// 						×
				// 					</a>
									
				// 					<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถระงับการใช้งานได้ <br />Error : Disable data not found.</div>');
				// redirect('user/manage');
				echo "error";
	
			}
		}
		public function add(){

			$data['str_validate'] = '';
			$checkSess = $this->connect_db->CheckSession();
			$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));
			
			$action = base64_decode($this->input->post('action'));
	
			if($action=='addUser'){
				
				## Get Post Value
				$p['usr'] = $this->input->post('user');
				$p['pwd'] = base64_encode($this->input->post('pass'));
				$p['group'] = $this->input->post('sel_group');
				$p['fname'] = $this->input->post('fname');
				$p['lname'] = $this->input->post('lname');
				if($this->input->post('u_sex')=='male'){ $p['sex'] = 'male';}
				if($this->input->post('u_sex')=='female'){ $p['sex'] = 'female';}
				$p['email'] = $this->input->post('email');
	
				/*$p['prjOption']=$this->input->post('prjOption');*/
	
				$this->load->library('form_validation');	
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
									<a class="close" data-dismiss="alert">
										×
									</a>
									
									<strong>Error!</strong><br />', '</div>');				
				$this->form_validation->set_rules('user', 'Username', 'trim|required|min_length[4]|max_length[16]');
				$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]|max_length[16]');
				$this->form_validation->set_rules('sel_group', 'User Groups', 'is_natural_no_zero');
				$this->form_validation->set_rules('fname', 'First name', 'trim|required');
				$this->form_validation->set_rules('lname', 'Last name', 'trim|required');
				$this->form_validation->set_rules("u_sex", "", "trim");
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
				// $this->form_validation->set_rules('prjOption', 'Project select', 'trim|required');
				
				$this->form_validation->set_message('required', '%s ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย');
				$this->form_validation->set_message('alpha_numeric', '%s ห้ามใช้ตัวอักษรอักขระพิเศษ'); 
				$this->form_validation->set_message('min_length', '%s: ต้องกรอกไม่น้อยกว่า %s ตัวอักษร');
				$this->form_validation->set_message('max_length', '%s: ต้องกรอกไม่เกิน %s ตัวอักษร');
				$this->form_validation->set_message('valid_email', 'รูปแบบ Email ไม่ถูกต้อง');
				$this->form_validation->set_message('is_natural_no_zero', 'กรุณาทำการตรวจสอบด้วย %s');        																
				
				if($this->form_validation->run() == FALSE){
					
					$data['str_validate'] = FALSE;
									
				}else{# form_validation = TRUE
					
					$lastId = $this->connect_db->addUser($p);
					if($lastId != FALSE){
						
						$this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
									<a class="close" data-dismiss="alert">
										×
									</a>
									<strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Add data success.</div>');
									redirect('user/manage');
	
					}else{
	
						$this->session->set_flashdata('msgResponse','<div style="color:red; text-align:center" class="alert alert ">
									<a class="close" data-dismiss="alert">
										×
									</a>
									<strong>Error!</strong><br />ไม่สามารถบันทึกข้อมูลได้ <br />Error : Add data not found.</div>');
						redirect('user/add');	
					}				
					
				}
						
			}		
			
			$sqlSelG = "SELECT * FROM sys_user_groups WHERE sug_id<>'0' AND enable='1';";
			$data['excLoadG'] = $this->db->query($sqlSelG);
	
			$setTitle = strtoupper($this->router->fetch_method().' '.$this->router->fetch_class());
	
			$this->template->write('page_title', 'TBKK | '.$setTitle.'');
			$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php', $data);
			$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
			$this->template->write_view('page_content', 'all/'. $this->theme .'/view_register.php', $data);
			$this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
			$this->template->render();
			
		}

		// public function test(){
			
		// }
		public function rule($uid){
		
			$data['str_validate'] = '';
			$data['img_path'] = $this->img_path;
	
			$checkSess = $this->connect_db->CheckSession();
			$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));
	
	
			$action = base64_decode($this->input->post('action'));
			
			if($action=='saveRuleUser'){
	
				$p['rule'] = $this->input->post('chkRid');
							
				$resultAddRule = $this->connect_db->AddRuleUser($uid, $p['rule']);
			
				if($resultAddRule!=FALSE){
	
					$this->session->set_flashdata('msgResponse', '<div class="alert alert-success "><button class="close" data-dismiss="alert">×</button><i class="fa-fw fa fa-check"></i> <strong>บันทึกสิทธิ์เรียบร้อย </strong><br />Success : Save rule data success.</div>');
					redirect('user/rule/'.$uid);
	
				}else{
	
					$this->session->set_flashdata('msgResponse', '<div class="alert alert-danger "><button class="close" data-dismiss="alert">×</button><i class="fa-fw fa fa-check"></i> <strong>เกิดข้อผิดพลาด ไม่สามารถแก้ไขสิทธิ์ได้ </strong><br />Error : Save rule data not found.</div>');
					redirect('user/manage/'.$uid);
	
				}
	
	
			}
	
	
			$sqlLoadUser = "SELECT u.*, ug.name, ug.sug_id FROM sys_users AS u LEFT JOIN sys_user_groups AS ug ON ug.sug_id = u.sug_id WHERE u.su_id='{$uid}';";
			$excLoadUser = $this->db->query($sqlLoadUser);
			$recLoadUser = $excLoadUser->result_array();
			$data['recLoadUser'] = $recLoadUser[0];
	
	
			$sqlPerG = "SELECT
						sp.sp_id,
						sp.`name`
						FROM
						sys_users_groups_permissions AS sugp 
						LEFT JOIN sys_permission_groups AS spg ON spg.spg_id = sugp.spg_id
						LEFT JOIN sys_permissions AS sp ON sp.spg_id = spg.spg_id
						WHERE
						spg.`enable`='1' AND sp.enable='1' AND sugp.sug_id='{$recLoadUser[0]['sug_id']}' ORDER BY sp.spg_id ASC
						;";
			$data['excPerG'] = $this->db->query($sqlPerG);
	
			
			$sqlOthRule = "SELECT sup.sp_id,sp.`name` FROM sys_users_permissions AS sup 
					LEFT JOIN sys_permissions AS sp ON sp.sp_id = sup.sp_id 
					WHERE sup.su_id='{$uid}' AND sup.sp_id NOT IN 
					(
						SELECT
						sp.sp_id
						FROM
						sys_users_groups_permissions AS sugp 
						LEFT JOIN sys_permission_groups AS spg ON spg.spg_id = sugp.spg_id
						LEFT JOIN sys_permissions AS sp ON sp.spg_id = spg.spg_id
						WHERE
						spg.`enable`='1' AND sp.enable='1' AND sugp.sug_id='{$recLoadUser[0]['sug_id']}'
					)
					;";
					
			$data['excOthRule'] = $this->db->query($sqlOthRule);
	
	
			$sqlRule = "SELECT sp_id FROM sys_users_permissions WHERE su_id='{$uid}';";
			$excRule = $this->db->query($sqlRule);
			
			$data['excRule'] = array();			
			foreach($excRule->result_array() as $r){
				
				array_push($data['excRule'], $r['sp_id']);   
			}
	
	
			$data['uid'] = $uid;
	
			$setTitle = strtoupper($this->router->fetch_method().' '.$this->router->fetch_class());
	
			$this->template->write('page_title', 'TBKK | '.$setTitle.'');
			$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php', $data);
			$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
			$this->template->write_view('page_content', 'all/'. $this->theme .'/view_ruleuser.php', $data);
			$this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
			$this->template->render();
	
		}
	
}
