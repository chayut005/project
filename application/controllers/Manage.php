<?php defined('BASEPATH')OR exit('No direct script access allowed');

class Manage extends CI_Controller {

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
	
	public function helpdesk(){

		$data['str_validate'] = '';
		
		$checkSess = $this->connect_db->CheckSession();
		
		$setTitle = strtoupper(str_replace('_', ' ', $this->router->fetch_method()));
		$this->template->write('page_title', ' TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php');
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_home.php', $data);
        $this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();
	}
	public function Home(){

		$data['str_validate'] = '';
		$data['img_path'] = $this->img_path;
		
		$checkSess = $this->connect_db->CheckSession();
		
		$setTitle = strtoupper(str_replace('_', ' ', $this->router->fetch_method()));
		$this->template->write('page_title', ' TBKK | '.$setTitle.'');
		$this->template->write_view('page_header', 'all/'. $this->theme .'/view_header.php');
		$this->template->write_view('page_menu', 'all/'. $this->theme .'/view_menu.php');
		$this->template->write_view('page_content', 'all/'. $this->theme .'/view_home.php', $data);
        $this->template->write_view('page_footer', 'all/'. $this->theme .'/view_footer.php');
		$this->template->render();
	}


	public function Logout(){
		
		$this->connect_db->Logout();		
    }


	
}
