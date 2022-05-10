<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Login extends CI_Controller {
	 
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
	 
	public function index()
	{
		
		$this->connect_db->checksession();
		redirect('manage');	
					
	}

	public function usera()
	{

		$data['str_validate'] = '';

		$action = base64_decode($this->input->post('action'));

		if ($action == 'login'){
			
			$this->load->helper('security'); 
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div style="border-radius: 5px;" class="alert alert-warning fade in">

								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');
			$this->form_validation->set_rules('userr', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required|alpha_numeric|xss_clean');
			
			$this->form_validation->set_message('required', '%s ไม่มีข้อมูล กรุณาทำการตรวจสอบ');
			$this->form_validation->set_message('alpha_numeric', '%s ห้ามใช้ตัวอักษรอักขระพิเศษ'); 
			
			if ($this->form_validation->run() == FALSE){
				
				$data['str_validate'] = FALSE;
												
			}else{ 

				$usr = $this->input->post('userr');
				$pwd = $this->input->post('pass');
				$usrData = $this->connect_db->Login($usr,$pwd);
								
				if($usrData['action'] != 'err') {
										
					$arrData = array('sessName'=> $usrData['firstname'], 'sessUsr'=> $usrData['username'], 'sessUsrId'=>$usrData['su_id'],'sessGroup'=>$usrData['sug_id'], 'sessLastacc'=> $usrData['last_access'], 'loggedIn' => "OK");				
					
					$this->session->set_userdata($arrData);
					redirect('login');

																		
				} else {
					
					if($usrData['value']=='b'){

						$this->session->set_flashdata('msg_error','<div style="border-radius: 5px;" class="alert alert-warning fade in">
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />แอคเคาท์นี้ถูกระงับ<br />Account is baned.</div>');
						
					}else{

						$this->session->set_flashdata('msg_error','<div style="border-radius: 5px;" class="alert alert-warning fade in">
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />รหัสผ่านไม่ถูกต้อง กรุณาทำการตรวจสอบข้อมูลอีกครั้ง <br />Invalid Account : Please check your account correctly.</div>');
					}
					redirect('login/usera');
					
					
						}
	
				}
				
			}
		
		
		

		$setTitle = strtoupper($this->router->fetch_method().' '.$this->router->fetch_class());
		
		$this->template->set_master_template('all/'. $this->theme .'/blank_login.php');
		$this->template->write('page_title', 'TBKK | '.$setTitle.'');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/View_login.php', $data);
		$this->template->render();

	}

			}
		
?>
