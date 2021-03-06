<?php defined('BASEPATH')OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
	public function table_req(){
		$datatable = $this->connect_db->data_req();
		$table = array ("data" => $datatable);
		echo json_encode( $table ); 
	}
	
	public function check_quest(){
		$id=$_POST["id"];

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

		$result = $this->connect_db->check_request($id);

		if($result!=FALSE){
			
			echo "suc";
		
		}else{
			
			echo "error";

		}
	}
	public function add_request(){
		$data['str_validate'] = '';
		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));
		$action = base64_decode($this->input->post('action'));
		

		if($action=='request'){
			$p['phases'] = $this->input->post('phase');
			$p['type'] = $this->input->post('types');
			$p['system'] = $this->input->post('syst');
			$p['comments'] = $this->input->post('comment');
			$p['pris'] = $this->input->post('pri');
			// isset($_FILES['image-title']['name']);
			$p['img'] = $_FILES['image-title']['name'];
			
	        


			$target_dir = "C:/AppServ/www/project/themes/softmat/view_img/";
			
			$target_file = $target_dir . basename($_FILES["image-title"]["name"]);
			// $uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));  
			// if(isset($_POST["submit"])) {
			//   $check = getimagesize($_FILES["image-title"]["tmp_name"]);
			//   if($check !== false) {
			// 	echo "File is an image - " . $check["mime"] . ".";
			// 	$uploadOk = 1;
			//   } else {
			// 	echo "File is not an image.";
			// 	$uploadOk = 0;
			//   }
			// }
			// if (file_exists($target_file)) {
			//   echo "Sorry, file already exists.";
			//   $uploadOk = 0;
			// }
			// if ($_FILES["image-title"]["size"] > 1000000000000000 ) {
			//   echo "Sorry, your file is too large.";
			//   $uploadOk = 0;
			// }
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			//   $uploadOk = 0;
			// }
			// if ($uploadOk == 0) {
			//   echo "Sorry, your file was not uploaded.";
			// } else {  
				echo "errimg";
				exit;
			}
		  move_uploaded_file($_FILES["image-title"]["tmp_name"], $target_file);
			
		//   echo "The file ". htmlspecialchars( basename( $_FILES["image-title"]["name"])). " has been uploaded.";
		// 	  } else {
		// 		echo "The file has been uploaded.";
		// 	  }
		//  }
		//  $image = $this->input->post('image-title');
		//  $string = substr($target_file , 13);

			$this->load->library('form_validation');		
			$this->form_validation->set_rules('phase', "", "trim");
			$this->form_validation->set_rules('types', 'Type', 'is_natural_no_zero');
			$this->form_validation->set_rules('syst', 'System', 'is_natural_no_zero');
			$this->form_validation->set_rules('comment', 'Comment', 'trim|max_length[999]');
		    $this->form_validation->set_rules('pri', 'Priority', 'is_natural_no_zero');				

			if($this->form_validation->run() == FALSE){
					echo"errorT";
				$data['str_validate'] = FALSE;
								
			}else{# form_validation = TRUE
				
				// var_dump($p);
				$lastId = $this->connect_db->submitrequest($p);
				if($lastId != FALSE){
					
					// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
					// 			<a class="close" data-dismiss="alert">
					// 				??
					// 			</a>
					// 			<strong>??????????????????????????????????????????????????????????????? </strong><br />Success : Add data success.</div>');
					// 			redirect('form/request');
					echo "suc";

				}else{

					// $this->session->set_flashdata('msgResponse','<div style="color:red; text-align:center" class="alert alert ">
					// 			<a class="close" data-dismiss="alert">
					// 				??
					// 			</a>
					// 			<strong>Error!</strong><br />???????????????????????????????????????????????????????????????????????? <br />Error : Add data not found.</div>');
					// redirect('form/request');	
					echo "err";
				}				
			}
		}	
	}
	public function request(){
		$sqlSelG = "SELECT * FROM sys_type WHERE tus_id<>'0' AND enable='1';";
		$data['excLoadG'] = $this->db->query($sqlSelG);
		$sqlSelGs = "SELECT * FROM sys_priority WHERE pri_id<>'0' AND enable='1';";
		$data['excLoadGs'] = $this->db->query($sqlSelGs);
		$sqlSelGx = "SELECT * FROM sys_system WHERE sys_id<>'0' AND enable='1';";
		$data['excLoadGx'] = $this->db->query($sqlSelGx);


		$setTitle = strtoupper(str_replace('_', ' ', $this->router->fetch_method()));
		$this->template->write('page_title', ' TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php');
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_request.php', $data);
        $this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();
	}	
	public function manage(){

	
		$data['str_validate'] = '';
		$this->connect_db->checksession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

	
		

			$sqlLoadUser="SELECT
			smp.*,
			st.NAME AS stname,
			stm.NAME AS stmname,
			sp.NAME AS spname 
		FROM
			sys_manage_problems AS smp
			LEFT JOIN sys_type AS st ON smp.tus_id = st.tus_id
			LEFT JOIN sys_system AS stm ON smp.sys_id = stm.sys_id
			LEFT JOIN sys_priority AS sp ON smp.pri_id = sp.pri_id";
			$excLoadUser = $this->db->query($sqlLoadUser);
		
		$recLoadUser = $excLoadUser->result_array();
		$data['list_request'] = $recLoadUser;
		$setTitle = strtoupper(str_replace('_', ' ', $this->router->fetch_method()));

		$this->template->write('page_title', ' TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php');
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_managerequest.php', $data);
        $this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();
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
									??
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
			
			$this->form_validation->set_message('required', '%s ????????????????????????????????? ???????????????????????????????????????????????????????????????');
			$this->form_validation->set_message('alpha_numeric', '%s ??????????????????????????????????????????????????????????????????????????????'); 
			$this->form_validation->set_message('min_length', '%s: ????????????????????????????????????????????????????????? %s ????????????????????????');
			$this->form_validation->set_message('max_length', '%s: ????????????????????????????????????????????? %s ????????????????????????');
			$this->form_validation->set_message('valid_email', '?????????????????? Email ??????????????????????????????');
			$this->form_validation->set_message('is_natural_no_zero', '??????????????????????????????????????????????????????????????? %s');        																
			
			if($this->form_validation->run() == FALSE){
				
				$data['str_validate'] = FALSE;
								
			}else{# form_validation = TRUE
				
				$lastId = $this->connect_db->addUser($p);
				if($lastId != FALSE){
					
					$this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
								<a class="close" data-dismiss="alert">
									??
								</a>
								<strong>??????????????????????????????????????????????????????????????? </strong><br />Success : Add data success.</div>');
								redirect('user/manage');

				}else{

					$this->session->set_flashdata('msgResponse','<div style="color:red; text-align:center" class="alert alert ">
								<a class="close" data-dismiss="alert">
									??
								</a>
								<strong>Error!</strong><br />???????????????????????????????????????????????????????????????????????? <br />Error : Add data not found.</div>');
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
	public function index()
	{
		isset( $_POST['id']);
		$num1=$_POST["id"];
		$sqlSel = "SELECT * FROM sys_permission_groups WHERE spg_id='{$num1}';";
			$excSel = $this->db->query($sqlSel);
			$numSel = $excSel->result_array();
			// var_dump($numSel);
			// echo $numSel;
			// exit();
			echo json_encode($numSel);

	}
}
