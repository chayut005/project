<?php defined('BASEPATH') or exit('No direct script access allowed');

class Permission extends CI_Controller
{

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
	
	public function table_p(){
		$datatable = $this->connect_db->data_p();
		$table = array ("data" => $datatable);
		echo json_encode( $table ); 
	}
	public function permissions()
	{

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));


		$sqlSel = "SELECT sp.*, spg.name AS groupName FROM sys_permissions AS sp LEFT JOIN sys_permission_groups AS spg ON spg.spg_id = sp.spg_id;";
		$excSel = $this->db->query($sqlSel);
		$recSel = $excSel->result_array();
		$data['list_permission'] = $recSel;

		$sqlSelG = "SELECT * FROM sys_permission_groups WHERE enable='1';";
		$data['excLoadG'] = $this->db->query($sqlSelG);


		$data['frmEdit'] = FALSE;

		$pid = $this->uri->segment(3);
		if ($pid != '') {

			$sqlSel = "SELECT * FROM sys_permissions WHERE sp_id='{$pid}';";
			$excSel = $this->db->query($sqlSel);
			$numSel = $excSel->num_rows();

			if ($numSel != 0) {

				$data['perDataEdit'] = $this->connect_db->ShowPermission($pid);
				$data['frmEdit'] = TRUE;
			} else {
				redirect('permission/permissions');
			}
		}



		$setTitle = strtoupper($this->router->fetch_method() . ' ' . $this->router->fetch_class());

		$this->template->write('page_title', 'TBKK | ' . $setTitle . '');
		$this->template->write_view('page_header', 'all/' . $this->theme . '/view_header.php', $data);
		$this->template->write_view('page_menu', 'all/' . $this->theme . '/view_menu.php');
		$this->template->write_view('page_content', 'all/' . $this->theme . '/view_permission.php', $data);
		$this->template->write_view('page_footer', 'all/' . $this->theme . '/view_footer.php');
		$this->template->render();
	}

	public function addper()
	{

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

		$action = base64_decode($this->input->post('action'));

		if ($action == 'addPermission') {

			$p['name'] = $this->input->post('txt_name');
			$p['cont'] = $this->input->post('txt_cont');
			$p['group'] = $this->input->post('sel_group');
			$p['enable'] = trim($this->input->post('rad_status'));

			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
								<button class="close" data-dismiss="alert">
									×
								</button>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');

			$this->form_validation->set_rules('txt_name', 'Permission name', 'trim|required');
			$this->form_validation->set_rules('txt_cont', 'Controller/Method', 'trim|required');
			$this->form_validation->set_rules('sel_group', 'Permission Groups', 'is_natural_no_zero');
			$this->form_validation->set_rules("rad_status", "", "trim");

			if ($this->form_validation->run() == FALSE) {

				echo"errorT";
			} else { # form_validation = TRUE

				$result = $this->connect_db->AddPermission($p['name'], $p['enable'], $p['group'], $p['cont']);

				if ($result != FALSE) {

					// $sqlSel = "SELECT MAX(sug_id) AS sug_id FROM sys_user_groups;";
					// $excSel = $this->db->query($sqlSel);
					// $recSel = $excSel->result_array();

					// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
					// 			<button class="close" data-dismiss="alert">
					// 				×
					// 			</button>
					// 			<i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Add data success.</div>');
					// redirect('permission/permissions');
					echo "suc";
				} else {


					// $this->session->set_flashdata('msgResponse', '<div class="alert alert-danger ">
					// 			<button class="close" data-dismiss="alert">
					// 				×
					// 			</button>
					// 			<i class="fa-fw fa fa-times"></i>
					// 			<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Add data not found.</div>');
					// redirect('permission/permissions');
					echo "err";
				}
			}
		}
	}


	public function editper($pid)
	{

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

		$action = base64_decode($this->input->post('action'));

		if ($action == 'editPermission') {

			$p['key'] = $pid;
			$p['usr'] = trim($this->input->post('txt_name'));
			$p['cont'] = trim($this->input->post('txt_cont'));
			$p['group'] = $this->input->post('sel_group');
			$p['enable'] = $this->input->post('rad_status');

			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');

			$this->form_validation->set_rules('txt_name', 'Permission name', 'trim|required');
			$this->form_validation->set_rules('txt_cont', 'Controller/Method', 'trim|required');
			$this->form_validation->set_rules('sel_group', 'Permission Groups', 'is_natural_no_zero');
			$this->form_validation->set_rules("rad_status", "", "trim");

			$this->form_validation->set_message('required', '%s ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย');
			$this->form_validation->set_message('is_natural_no_zero', 'กรุณาทำการตรวจสอบด้วย %s');

			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('msgError', validation_errors());
				redirect('permission/permissions/' . $pid);
			} else { # form_validation = TRUE

				$result = $this->connect_db->EditPermission($p['key'], $p['usr'], $p['enable'], $p['group'], $p['cont']);


				if ($result != FALSE) {

					$this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Save data success.</div>');
					redirect('permission/permissions/' . $pid);
				} else {

					$this->session->set_flashdata('msgResponse', '<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Save data not found.</div>');
					redirect('permission/permissions');
				}
			}
		}
	}


	public function deleteper()
	{
		$id=$_POST["id"];

		$result = $this->connect_db->DeletePermission($id);

		if ($result != FALSE) {

			// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
			// 					<a class="close" data-dismiss="alert">
			// 						×
			// 					</a>
			// 					<i class="fa-fw fa fa-check"></i> <strong>ลบข้อมูลเรียบร้อย </strong><br />Success : Delete data success.</div>');
			// redirect('permission/permissions/');
			echo"suc";
		} else {

			// $this->session->set_flashdata('msgResponse', '<div class="alert alert-danger ">
			// 					<a class="close" data-dismiss="alert">
			// 						×
			// 					</a>
			// 					<i class="fa-fw fa fa-times"></i>
			// 					<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Save data not found.</div>');
			// redirect('permission/permissions');
			echo"err";
		}
	}



	//------------------------------------------------------------permissiongroup----------------------------------------------------------------//
	public function tablepg(){
		$datatable = $this->connect_db->datatablepg();
		$table = array ("data" => $datatable);
		echo json_encode( $table ); 
	}
	
	public function permissiongroups()
	{

		$data['str_validate'] = '';

		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));


		// $sqlSel = "SELECT * FROM sys_permission_groups;";
		// $excSel = $this->db->query($sqlSel);
		// $recSel = $excSel->result_array();
		// $data['list_permissiongroup'] = $recSel;

		// $data['frmEdit'] = FALSE;

		$pgid = $this->uri->segment(3);
		if ($pgid != '') {

			$sqlSel = "SELECT * FROM sys_permission_groups WHERE spg_id='{$pgid}';";
			$excSel = $this->db->query($sqlSel);
			$numSel = $excSel->num_rows();

			if ($numSel != 0) {

				$data['perDataEdit'] = $this->connect_db->ShowPermissionGroup($pgid);
				$data['frmEdit'] = TRUE;
				//print_r($data['perDataEdit']);exit();
			} else {
				redirect('permission/permissiongroups');
			}
		}


		$setTitle = strtoupper($this->router->fetch_method() . ' ' . $this->router->fetch_class());

		$this->template->write('page_title', 'TBKK | ' . $setTitle . '');
		$this->template->write_view('page_header', 'all/' . $this->theme . '/view_header.php', $data);
		$this->template->write_view('page_menu', 'all/' . $this->theme . '/view_menu.php');
		$this->template->write_view('page_content', 'all/' . $this->theme . '/view_permissiongroup.php', $data);
		$this->template->write_view('page_footer', 'all/' . $this->theme . '/view_footer.php');
		$this->template->render();
	}

	public function addpergroup()
	{


		// file hello.php
		// isset($_POST['checkx']);
		// $name = $_POST['name'];
		// $enable = $_POST['enable'];
		// $actionx = $_POST['action'];
		// // var_dump($actionx);
		// // if($enable=='1'){
		// // 	$disable = $_POST['disable'] = '5';
		// // 	}
		// // if($disable=='0'){ $p['end'] = '0';}
		// $json = array( "name"=>"ค่าตัวแปร name ส่งกลับมาจาก Server แบบ POST คือ ".$name.$enable.$actionx);
		// echo json_encode( $json );    




		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

		$action = base64_decode($this->input->post('action'));

		if ($action == 'addPermissiongroup') {

			$p['name'] = $this->input->post('txt_name');
			$p['enable'] = trim($this->input->post('rad_status'));

			$this->load->library('form_validation');	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');				

			$this->form_validation->set_rules('txt_name', 'Permission name', 'trim|required');
			$this->form_validation->set_rules("rad_status", "", "trim");

			if ($this->form_validation->run() == FALSE) {

				// $this->session->set_flashdata('msgError', validation_errors());
				echo "errorT";
			} else {
				$result = $this->connect_db->AddPermissionGroup($p['name'], $p['enable']);
				if ($result != FALSE) {
					echo "suc";
				} else {
					echo "err";
				}
			}
		}
	}



	public function editpergroup()
	{


		$data['str_validate'] = '';


		$checkSess = $this->connect_db->CheckSession();
		$this->connect_db->CheckPermission($this->session->userdata('sessUsrId'));

		$action = base64_decode($this->input->post('action'));

		if ($action == 'editPermissionGroup') {

			$p['key'] = $this->input->post('txt_id');
			$p['usr'] = trim($this->input->post('txt_name'));
			$p['enable'] = $this->input->post('rad_status');

			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger ">
								<a class="close" data-dismiss="alert">
									×
								</a>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong><br />', '</div>');

			$this->form_validation->set_rules('txt_name', 'Permission name', 'trim|required');
			$this->form_validation->set_rules("rad_status", "", "trim");
			if ($this->form_validation->run() == FALSE) {

				// $this->session->set_flashdata('msgError', validation_errors());
				echo "errorT";
			} else { # form_validation = TRUE

				$result = $this->connect_db->EditPermissionGroup($p['key'], $p['usr'], $p['enable']);


				if ($result != FALSE) {

					// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
					// 			<a class="close" data-dismiss="alert">
					// 				×
					// 			</a>
					// 			<i class="fa-fw fa fa-check"></i> <strong>บันทึกข้อมูลเรียบร้อย </strong><br />Success : Save data success.</div>');
					// redirect('permission/permissiongroups/' . $pgid);
					echo "suc";
				} else {

					// $this->session->set_flashdata('msgResponse', '<div class="alert alert-danger ">
					// 			<a class="close" data-dismiss="alert">
					// 				×
					// 			</a>
					// 			<i class="fa-fw fa fa-times"></i>
					// 			<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Save data not found.</div>');
					// redirect('permission/permissiongroups');
					echo "err";

				}
			}
		}
	}


	public function deletepergroup()
	{
		$id=$_POST["id"];
		$result = $this->connect_db->DeletePermissionGroup($id);

		if ($result != FALSE) {

			// $this->session->set_flashdata('msgResponse', '<div class="alert alert-success ">
			// 					<a class="close" data-dismiss="alert">
			// 						×
			// 					</a>
			// 					<i class="fa-fw fa fa-check"></i> <strong>ลบข้อมูลเรียบร้อย </strong><br />Success : Delete data success.</div>');
			// redirect('permission/permissiongroups/');
			echo "suc";
		} else {

			// $this->session->set_flashdata('msgResponse', '<div class="alert alert-danger ">
			// 					<a class="close" data-dismiss="alert">
			// 						×
			// 					</a>
			// 					<i class="fa-fw fa fa-times"></i>
			// 					<strong>Error!</strong><br />เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้ <br />Error : Save data not found.</div>');
			// redirect('permission/permissiongroups');
			echo "error";
		}
	}
}
