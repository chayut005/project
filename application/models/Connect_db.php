<?php
class Connect_db extends CI_Model {

	public function __construct()
	{
		// $this->cmm = $this->load->database('qmdm_system', true);
	}

	public function test()
	{
		redirect('manage');
				
    }
	


	 public function Login($usr='',$pwd='')
    {
		$p['usr'] = trim($usr);
		$p['pwd'] = base64_encode(trim($pwd));
		
		$sqlSel = "SELECT * FROM sys_users WHERE username='{$p['usr']}' and password='{$p['pwd']}';";
		$query = $this->db->query($sqlSel);
				
		if($query->num_rows()!=0) {
			
			$result = $query->result_array();
						
			if($result['0']['enable']!=0){
					
				return $result[0];
				
			}else{
				
				$error = array('action'=>'err', 'value'=>'b');			
				return $error;
			}
			
		}else { 
			
			$error = array('action'=>'err', 'value'=>'i');			
			return $error;
		}
    }
	public function Logout()
	{	
		/*$sqlDelFile = "DELETE FROM upload_temp_filename WHERE u_id='".$this->session->userdata('sessUsrId')."';";
		$excDelFile = $this->db->query($sqlDelFile);*/
		
		$sqlLastAcc = "UPDATE sys_users SET last_access=NOW() WHERE username='".$this->session->userdata('sessUsr')."';";
            $this->session->unset_userdata($sqlLastAcc);
            $this->session->sess_destroy();

            redirect('login/usera');
		
	}

	public function CheckPermission($para){
		
		$get_url = trim($this->router->fetch_class().'/'.$this->router->fetch_method());

		$sqlChkPerm = "SELECT
			sp.name,
			sp.controller
			FROM
			sys_users_permissions AS sup
			INNER JOIN sys_permissions AS sp ON sp.sp_id = sup.sp_id
			LEFT JOIN sys_permission_groups AS spg ON sp.spg_id = spg.spg_id
			WHERE
			sp.enable='1' AND spg.enable='1' AND sup.su_id='{$para}' AND sp.controller='{$get_url}';";
			
		$excChkPerm = $this->db->query($sqlChkPerm);
		$numChkPerm = $excChkPerm->num_rows();
		
		if($numChkPerm == 0) {
			
			echo '<script language="javascript">';
			echo 'alert("Permission not found.");';
			echo 'history.go(-1);';
			echo '</script>';
			exit();
			
		}

	}
    public function CheckSession() 
    {
        if($this->session->userdata('loggedIn')!="OK") {
					
           redirect('login/usera');
		   return FALSE;
		   
        }else{	return TRUE; 	}
    }

	public function deleteUser($key=''){
		$sid = $this->session->userdata('sessUsrId');
		$this->db->set('enable', '0');
		$this->db->set('del_flag', '0');
		$this->db->set('date_delete', 'NOW()', FALSE);
		$this->db->set('del_by', $sid);
		$this->db->where('su_id', $key);
		$exc_user = $this->db->update('sys_users');

		if ($exc_user){
			
			return TRUE;	
		
		}else{	return FALSE;	}
		
	}
}

 
?>
