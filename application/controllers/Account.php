<?php defined('BASEPATH')OR exit('No direct script access allowed');

class Account extends CI_Controller {

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
	
	public function editprofile(){

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));


		$action = base64_decode($this->input->post('action'));

		if($action=='editprofile'){

			## Get Post Value
			
			$p['fname'] = $this->input->post('txt_fname');
			$p['lname'] = $this->input->post('txt_lname');
			$p['email'] = $this->input->post('txt_email');
			if($this->input->post('u_sex')=='male'){ $p['sex'] = 'male';}
			if($this->input->post('u_sex')=='female'){ $p['sex'] = 'female';}
									
			$this->load->library('form_validation');	





			$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');				
								
			$this->form_validation->set_rules('txt_fname', 'First name', 'trim|required');
			$this->form_validation->set_rules('txt_lname', 'Last name', 'trim|required');
			$this->form_validation->set_rules("u_sex", "", "trim");
			$this->form_validation->set_rules('txt_email', 'Email', 'trim|required|valid_email');
			
			$this->form_validation->set_message('required', '%s ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย');
			$this->form_validation->set_message('alpha_numeric', '%s ห้ามใช้ตัวอักษรอักขระพิเศษ'); 
			$this->form_validation->set_message('min_length', '%s: ต้องกรอกไม่น้อยกว่า %s ตัวอักษร');
			$this->form_validation->set_message('max_length', '%s: ต้องกรอกไม่เกิน %s ตัวอักษร');
			$this->form_validation->set_message('valid_email', 'รูปแบบ Email ไม่ถูกต้อง');
			$this->form_validation->set_message('is_natural_no_zero', 'กรุณาทำการตรวจสอบด้วย %s');        																
			
			if($this->form_validation->run() == FALSE){
				
				$data['str_validate'] = FALSE;
								
			}else{

				$result = $this->connect_db->editProfile($this->session->userdata('sessUsrId'),$p);

				if($result!=FALSE){					
					$this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
					<a class="close" data-dismiss="alert">
						×
					</a>
					<i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Add data success.</div>');
		redirect('account/editprofile');
		
		
				}else{

					$this->session->set_flashdata('msgResponse','<div class="alert alert-danger">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Edit profile not found.</div>');
					redirect('account/editprofile');	
				}

			}


		}

		$sqlLoadUser = "SELECT * FROM sys_users WHERE su_id='".$this->session->userdata('sessUsrId')."';";
		$excLoadUser = $this->db->query($sqlLoadUser);
		$recLoadUser = $excLoadUser->result_array();
		$data['recLoadUser'] = $recLoadUser[0];

		$setTitle = strtoupper($this->router->fetch_method().' '.$this->router->fetch_class());	
		
		$this->template->write('page_title', 'TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php', $data);
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_editprofile.php', $data);
		$this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();
	}
	public function password(){

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

				$action = base64_decode($this->input->post('action'));

		if($action=='changepassword'){

			## Get Post Value
			$p['oldPwd'] = $this->input->post('txt_oldpwd');
			$p['newPwd'] = $this->input->post('txt_newpwd');
			$p['cfPwd'] = $this->input->post('txt_cfpwd');
			
									
			$this->load->library('form_validation');	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');				
			
			$this->form_validation->set_rules('txt_oldpwd', 'Old Password', 'trim|required|min_length[4]|max_length[16]');
			$this->form_validation->set_rules('txt_newpwd', 'New Password', 'trim|required|min_length[4]|max_length[16]');
			$this->form_validation->set_rules('txt_cfpwd', 'Confirm Password', 'trim|required|min_length[4]|max_length[16]|matches[txt_newpwd]');
			
			$this->form_validation->set_message('required', '%s ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย');
			$this->form_validation->set_message('alpha_numeric', '%s ห้ามใช้ตัวอักษรอักขระพิเศษ'); 
			$this->form_validation->set_message('min_length', '%s: ต้องกรอกไม่น้อยกว่า %s ตัวอักษร');
			$this->form_validation->set_message('max_length', '%s: ต้องกรอกไม่เกิน %s ตัวอักษร');
			$this->form_validation->set_message('valid_email', 'รูปแบบ Email ไม่ถูกต้อง');
			$this->form_validation->set_message('is_natural_no_zero', 'กรุณาทำการตรวจสอบด้วย %s');        																
			
			if($this->form_validation->run() == FALSE){
				
				$data['str_validate'] = FALSE;
								
			}else{

				$result = $this->connect_db->changePassword($this->session->userdata('sessUsrId'),$p);

				if($result!=FALSE){					

					$this->session->set_flashdata('msgResponse', '<div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Change Password success.</div>');
					redirect('account/password');					

				}else{

					$this->session->set_flashdata('msgResponse','<div class="alert alert-danger">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Change Pasword not found.</div>');
					redirect('account/password');	
				}

			}

		}

		$setTitle = strtoupper($this->router->fetch_method().' '.$this->router->fetch_class());	
		
		$this->template->write('page_title', 'TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php', $data);
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_changepass.php', $data);
		$this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();


	}

}


