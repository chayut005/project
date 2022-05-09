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
		
	public function index(){
		
		redirect('manage/helpdesk');
	}
	
	public function manage(){

        $data['str_validate'] = '';
		$data['img_path'] = $this->img_path;

		$checkSess = $this->connect_db->CheckSession();
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
		$this->template->set_master_template('all/'. $this->theme .'/blank_table.php');
		$this->template->write('page_title', ' TBKK | '.$setTitle.'');
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_manageuser.php', $data);
		$this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');

		$this->template->render();
	}

	
}
