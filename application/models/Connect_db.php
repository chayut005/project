<?php
class Connect_db extends CI_Model {
	public function __construct()
	{
		// $this->cmm = $this->load->database('qmdm_system', true);
	}
	public function data_p(){
		$sqlSel = "SELECT sp.*, spg.name AS groupName FROM sys_permissions AS sp LEFT JOIN sys_permission_groups AS spg ON spg.spg_id = sp.spg_id WHERE sp.del_flag<>0;";
		$excSel = $this->db->query($sqlSel);
		$recSel = $excSel->result_array();
	return $recSel;
	
}
public function check_request($key=''){
		
	$this->db->set('status', '0');
	$this->db->set('date_update', 'NOW()', FALSE);
	$this->db->where('ma_id', $key);
	$exc_user = $this->db->update('sys_manage_problems');
	
	if ($exc_user){
		
		return TRUE;	
	
	}else{	return FALSE;	}
	 
}
	public function data_req(){
		$sqlSel = "SELECT
		smp.*,
		st.NAME AS stname,
		stm.NAME AS stmname,
		sp.NAME AS spname 
	FROM
		sys_manage_problems AS smp
		LEFT JOIN sys_type AS st ON smp.tus_id = st.tus_id
		LEFT JOIN sys_system AS stm ON smp.sys_id = stm.sys_id
		LEFT JOIN sys_priority AS sp ON smp.pri_id = sp.pri_id";
		$excSel = $this->db->query($sqlSel);
		$recSel = $excSel->result_array();
	return $recSel;
	
}
	public function datagroups(){
		$sqlSel = "SELECT * FROM sys_user_groups AS sug WHERE sug.del_flag<>'0'";
		$excSel = $this->db->query($sqlSel);
		$recSel = $excSel->result_array();
	return $recSel;
	
}
	public function datauseradmin(){
			$sqlSel = "SELECT su.*, CONCAT(su.firstname, ' ', su.lastname) AS fullname , sug.name AS group_name FROM sys_users AS su LEFT JOIN sys_user_groups AS sug ON su.sug_id = sug.sug_id;";
			$excSel = $this->db->query($sqlSel);
		    $recSel = $excSel->result_array();
		return $recSel;
		
	}
	public function datauser($key){
			$sqlSel = "SELECT su.*, CONCAT(su.firstname, ' ', su.lastname) AS fullname , sug.name AS group_name FROM sys_users AS su LEFT JOIN sys_user_groups AS sug ON su.sug_id = sug.sug_id WHERE su.sug_id<>'1' AND su.username<>'{$key}';";
			$excSel = $this->db->query($sqlSel);
		$recSel = $excSel->result_array();
		return $recSel;
		
	}
	public function datatablepg(){
		$sqlSel = "SELECT spg_id, name , enable FROM sys_permission_groups WHERE sys_permission_groups.del_flag<>'0' order by spg_id asc ;";
		$excSel = $this->db->query($sqlSel);
		$recSel = $excSel->result_array();
		return $recSel;
		
	}
	public function test()
	{
		redirect('manage');
				
    }
		public function redeleteUser($key=''){
		$sid = $this->session->userdata('sessUsr');
		$this->db->set('enable', '1');
		$this->db->set('del_flag', '1');
		$this->db->set('del_by', $sid);
		$this->db->where('su_id', $key);
		$exc_user = $this->db->update('sys_users');
		if ($exc_user){
			
			return TRUE;	
		
		}else{	return FALSE;	}
		
	}
	
	public function submitrequest($p){
		## User
		$sid = $this->session->userdata('sessUsr');
		$setUser = array(
			    'plant' => $p['phases'],
			    'tus_id' => $p['type'],
				'sys_id' => $p['system'],
				'status' => '1',
				'problems' => $p['comments'],
				'pri_id' => $p['pris'],
				'create_by' => $sid,
				'date_create' => date('Y-m-d H:i:s'),
				'date_update' => date('Y-m-d H:i:s'),
				 'img' =>$p['img'],	
				'del_flag' => '1',
				);
		
		$this->db->set($setUser);
		$excInsUser = $this->db->insert('sys_manage_problems');

		$lastId = $this->db->insert_id();
		return $lastId;

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

	public function ShowMenu($key){

		$sqlGroupMenu = "SELECT
		smg.name AS g_name,
		smg.icon_menu,
		smg.mg_id,
		smg.order_no
		FROM
		sys_menu_groups smg
		LEFT JOIN sys_menus sm ON smg.mg_id = sm.mg_id
		WHERE sm.sp_id is NULL OR sm.sp_id IN (select sup.sp_id FROM sys_users_permissions AS sup WHERE sup.su_id = '$key' AND sm.enable = '1' AND smg.enable = '1')
		GROUP BY smg.name
						,smg.icon_menu
						,sm.mg_id
						,smg.order_no
		ORDER BY smg.order_no ASC ;";

		$excGroupMenu = $this->db->query($sqlGroupMenu);
		
		$result = array();
		foreach($excGroupMenu->result_array() as $gm){
			// var_dump($gm);
			

			$sqlSubMenu = "SELECT
			sm.*
			FROM
			sys_menus AS sm
			LEFT JOIN sys_menu_groups AS smg ON smg.mg_id = sm.mg_id
			WHERE sm.mg_id='{$gm['mg_id']}' AND sm.enable != '0' AND (sm.sp_id is NULL OR sm.sp_id IN (select sup.sp_id FROM sys_users_permissions AS sup WHERE sup.su_id = '$key' ))
			ORDER BY smg.order_no ASC, sm.order_no ASC
			;";
			
			$excSubMenu = $this->db->query($sqlSubMenu);			
			
			$subMenu = array();	
			foreach($excSubMenu->result_array() as $sm){
				
				array_push($subMenu, array('name'=>$sm['name'], 'method'=>$sm['method'], 'link'=>$sm['link']));
				
			}
		
				array_push($result, array('g_name'=>$gm['g_name'],'icon_menu'=>$gm['icon_menu'],'sub_menu'=>$subMenu));
				
						
		}
		// exit;
		return $result;
		
	}

	public function Logout()
	{	
		/*$sqlDelFile = "DELETE FROM upload_temp_filename WHERE u_id='".$this->session->userdata('sessUsrId')."';";
		$excDelFile = $this->db->query($sqlDelFile);*/
		
		$sqlLastAcc = "UPDATE sys_users SET last_access=NOW() WHERE username='".$this->session->userdata('sessUsr')."';";
		$this->db->query($sqlLastAcc);
		$this->session->sess_destroy(); 
		
        redirect('login/user');
		
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
					
           redirect('login/user');
		   return FALSE;
		   
        }else{	return TRUE; 	}
    }
	public function addUser($p){
		## User
		$setUser = array('sug_id' => $p['group'],
				'username' => $p['usr'],
				'password' => $p['pwd'],
				'firstname' => $p['fname'],
				'lastname' => $p['lname'],
				'gender' => $p['sex'],
				'email' => $p['email'],
				'enable' => '1',
				'date_create' => date('Y-m-d H:i:s'),
				'date_update' => date('Y-m-d H:i:s'),	
				'del_flag' => '1',
				);
		
		$this->db->set($setUser);
		$excInsUser = $this->db->insert('sys_users');

		$lastId = $this->db->insert_id();
	
		return $lastId;
	}

	public function addFiletempname($name,$tempname){
		$setFiletempname = array('u_id' => $this->session->userdata('sessUsrId'),
				'file_name' => $name,
				'file_temp_name' => $tempname,
				'date_create' => date('Y-m-d H:i:s')				
				);
		
		$this->db->set($setFiletempname);
		$excInsUser = $this->db->insert('upload_temp_filename');
	}


	
	public function editUser($key,$p){
		
		if($p['pwd'] != ''){

			$setUser = array('sug_id' => $p['group'], 
				'password' => $p['pwd'],
				'firstname' => $p['fname'],
				'lastname' => $p['lname'],
				'gender' => $p['sex'],
				'email' => $p['email'],
				'date_update' => date('Y-m-d H:i:s')				
				);
		}else{

			$setUser = array('sug_id' => $p['group'], 
				'firstname' => $p['fname'],
				'lastname' => $p['lname'],
				'gender' => $p['sex'],
				'email' => $p['email'],
				'date_update' => date('Y-m-d H:i:s')				
				);
		}		
		
		$this->db->where('su_id',$key);
		$excUp = $this->db->update('sys_users',$setUser);
		
		if($excUp){ return TRUE; }else{ return FALSE; }
		
	}

	// public function enableBox($key=''){
		
	// 	$this->db->set('enable', '1');
	// 	$this->db->set('date_update', 'NOW()', FALSE);
	// 	$this->db->where('box_id', $key);
	// 	$exc_box = $this->db->update('box');
		
	// 	if ($exc_box){
			
	// 		return TRUE;	
		
	// 	}else{	return FALSE;	}
		 
	// }

	// public function disableBox($key=''){
		
	// 	$this->db->set('enable', '0');
	// 	$this->db->set('date_update', 'NOW()', FALSE);
	// 	$this->db->where('box_id', $key);
	// 	$exc_box = $this->db->update('box');
		
	// 	if ($exc_box){
			
	// 		return TRUE;	
		
	// 	}else{	return FALSE;	}
		 
	// }


	
	public function enableUser($key=''){
		
		$this->db->set('enable', '1');
		$this->db->set('date_update', 'NOW()', FALSE);
		$this->db->where('su_id', $key);
		$exc_user = $this->db->update('sys_users');
		
		if ($exc_user){
			
			return TRUE;	
		
		}else{	return FALSE;	}
		 
	}

	public function num_enableUser($para){
		
		for($i=0;$i<count($para);$i++){
			
			$this->enableUser($para[$i]);
																									
		}
		
		return TRUE;
		
	}

	public function deleteqcdetail($key=''){
		$sid = $this->session->userdata('sessUsr');
		$this->qc = $this->load->database('qc_system', true);
		$sqlDel = "UPDATE qc_details SET del_flag = '0', del_date = NOW(), del_by = '{$sid}'  WHERE qc_id='{$key}';";
		$excDel = $this->qc->query($sqlDel);
				
		if($excDel) { return TRUE; }else { return FALSE; }
		
	}

	public function check_data($key=''){
		$this->qc = $this->load->database('qc_system', true);
		//$this->qc->set('checked_data', '1');
		$this->qc->set('check_date', 'NOW()', FALSE);
		$this->qc->set('leader_checked',$this->session->userdata('sessUsrId'));
		$this->qc->where('qc_id', $key);
		$exc_user = $this->qc->update('qc_details');
		
		if ($exc_user){
			
			return TRUE;	
		
		}else{	return FALSE;	}
		 
	}

	public function num_check_data($id){
		for($i=0;$i<count($id);$i++){
			
			$this->check_data($id[$i]);
																									
		}
		
		return TRUE;
	}
	public function disableUser($key=''){
		
		$this->db->set('enable', '0');
		$this->db->set('date_update', 'NOW()', FALSE);
		$this->db->where('su_id', $key);
		$exc_user = $this->db->update('sys_users');
		
		if ($exc_user){
			
			return TRUE;	
		
		}else{	return FALSE;	}
		 
	}

	public function num_disableUser($para){

		for($i=0;$i<count($para);$i++){
			
			$this->disableUser($para[$i]);
																									
		}
		
		return TRUE;
		
	}

	public function deleteUser($key=''){
		$sid = $this->session->userdata('sessUsr');
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

	
	public function num_deleteUser($para){
		
		for($i=0;$i<count($para);$i++){
			
			$this->deleteUser($para[$i]);
																									
		}
		
		return TRUE;
		
	}

	
	public function ShowUser($key=''){
		
		$sqlSel = "SELECT * FROM sys_users WHERE su_id='{$key}';";
		$query = $this->db->query($sqlSel);
		$result = $query->result_array();
		
		if($query->num_rows()!=0) {
			
            return $result[0];
        }else { 
		
            return FALSE;
        }
		
	}
		
	public function searchUser($searchTerm=''){
		
		
		 $this->db->select('*');
		 $this->db->from('sys_users');
		 $this->db->where('sug_id !=', '1');
		 $this->db->like('username',$searchTerm);
		 $this->db->or_like('firstname',$searchTerm);
		 $this->db->or_like('lastname',$searchTerm);
		 $this->db->or_like('email',$searchTerm);
		 
		 $query = $this->db->get();
		 
		 return $query->result_array();
		
	}
	
	public function getUser($str){
		
        $this->db->where('username', $str);
        $query = $this->db->get('sys_users');
        
		if($query->num_rows() > 0){
			
			return FALSE;
		}else{
			
			return TRUE;	
		}
		
    }	

	public function AddUserGroup($name='',$enable='1'){
		
		$sqlIns = "INSERT INTO sys_user_groups SET name='{$name}', enable='{$enable}', date_create=NOW(), del_flag='1'";
		$excIns = $this->db->query($sqlIns);
		
		if($excIns){ return TRUE; }else{ return FALSE; }
	}

	public function EditUserGroup($key='',$name='',$enable='1'){
		
		$sqlEdt = "UPDATE sys_user_groups SET name='{$name}', enable='{$enable}', date_create=NOW() WHERE sug_id='{$key}';";
		$excEdt = $this->db->query($sqlEdt);
		
		if($excEdt){ return TRUE; }else{ return FALSE; }
		
		
	}

	public function DeleteUserGroup($key=''){
		$sid = $this->session->userdata('sessUsr');
		$sqlDel = "UPDATE sys_user_groups SET del_by='{$sid}', enable='0', del_flag='0', date_delete=NOW() WHERE sug_id='{$key}';";
		$excDel = $this->db->query($sqlDel);
		
		$sqlDel = "UPDATE sys_users_groups_permissions SET del_by='{$sid}', del_flag='0', date_delete=NOW() WHERE sug_id='{$key}';";
		$excDel = $this->db->query($sqlDel);
		
		if($excDel) { return TRUE; }else { return FALSE; }
		
	}

	public function ShowUserGroup($key=''){
		
		$sqlSel = "SELECT * FROM sys_user_groups WHERE sug_id='{$key}';";
		$query = $this->db->query($sqlSel);
		$result = $query->result_array();
		
		if($query->num_rows()!=0) {
			
            return $result[0];
        }else { 
		
            return FALSE;
        }
		
	}

	public function AddRuleUserGroup($key,$rule=''){
		
		$sqlDel = "DELETE FROM sys_users_groups_permissions WHERE sug_id='{$key}';";
		$excDel = $this->db->query($sqlDel);
		
		if($rule!=''){
		
			foreach($rule as $r){
				// var_dump($r);
				
				$sqlIns = "INSERT INTO sys_users_groups_permissions SET sug_id='{$key}', spg_id='{$r}', date_create=NOW(), del_flag = '1' ;";
				$excIns = $this->db->query($sqlIns);
				
				if($excIns){
					// var_dump($excIns);
					$strIns = TRUE;
					
				}else{ $strIns = FALSE;}
			}
		
		}else{ $strIns = TRUE; }
		// exit();
		return $strIns;
		
		
	}

	public function AddRuleUser($key,$rule=''){
		
		$sqlDel = "DELETE FROM sys_users_permissions WHERE su_id='{$key}';";
		$excDel = $this->db->query($sqlDel);
		
		if($rule!=''){
		
			foreach($rule as $r){
				
				$sqlIns = "INSERT INTO sys_users_permissions SET su_id='{$key}', sp_id='{$r}', date_create=NOW();";
				$excIns = $this->db->query($sqlIns);
				
				if($excIns){
					
					$strIns = TRUE;
					
				}else{ $strIns = FALSE;}
			}
		
		}else{ $strIns = TRUE; }
		
		return $strIns;
		
		
	}


	public function AddPermission($name='',$enable='1',$group, $cont){
		
		$sqlIns = "INSERT INTO sys_permissions SET name='{$name}', controller='{$cont}',enable='{$enable}', spg_id='{$group}',date_create=NOW(), date_update=NOW(), del_flag = '1';";
		$excIns = $this->db->query($sqlIns);
		
		if($excIns){ return TRUE; }else{ return FALSE; }
		
		
	}

	public function EditPermission($key='',$name='',$enable='1',$group, $cont){
		
		$sqlEdt = "UPDATE sys_permissions SET name='{$name}', controller='{$cont}', enable='{$enable}', spg_id='{$group}', date_update=NOW() WHERE sp_id='{$key}';";
		$excEdt = $this->db->query($sqlEdt);
		
		if($excEdt){ return TRUE; }else{ return FALSE; }
		
		
	}
	
	public function DeletePermission($key=''){
		$sid = $this->session->userdata('sessUsr');
		$sqlDel = "UPDATE sys_permissions SET del_by='{$sid}', enable='0', del_flag='0', del_by='{$sid}', date_delete=NOW() WHERE sp_id='{$key}';";
		$excDel = $this->db->query($sqlDel);
		
		if($excDel) { return TRUE; }else { return FALSE; }
		
	}
	
	public function ShowPermission($key=''){
		
		$sqlSel = "SELECT * FROM sys_permissions WHERE sp_id='{$key}';";
		$query = $this->db->query($sqlSel);
		$result = $query->result_array();
		
		if($query->num_rows()!=0) {
			
            return $result[0];
        }else { 
		
            return FALSE;
        }
		
	}


	public function AddPermissionGroup($name='',$enable='1'){
		
		$sqlIns = "INSERT INTO sys_permission_groups SET name='{$name}', enable='{$enable}', date_create=NOW(), del_flag='1';";
		$excIns = $this->db->query($sqlIns);
		
		if($excIns){ return TRUE; }else{ return FALSE; }
		
		
	}

	public function EditPermissionGroup($key='',$name='',$enable='1'){
		
		$sqlEdt = "UPDATE sys_permission_groups SET name='{$name}', enable='{$enable}', date_create=NOW() WHERE spg_id='{$key}';";
		$excEdt = $this->db->query($sqlEdt);
		
		if($excEdt){ return TRUE; }else{ return FALSE; }
		
		
	}

	public function DeletePermissionGroup($key=''){
		$sid = $this->session->userdata('sessUsr');
		$sqlDel = "UPDATE sys_permission_groups SET del_by='{$sid}', enable='0', del_flag='0', date_delete=NOW() WHERE spg_id='{$key}';";
		$excDel = $this->db->query($sqlDel);
		
		if($excDel) { return TRUE; }else { return FALSE; }
		
	}

	public function ShowPermissionGroup($key=''){
		
		$sqlSel = "SELECT * FROM sys_permission_groups WHERE spg_id='{$key}';";
		$query = $this->db->query($sqlSel);
		$result = $query->result_array();
		
		if($query->num_rows()!=0) {
			
            return $result[0];
        }else { 
		
            return FALSE;
        }
		
	}

	
	public function editProfile($key,$p){
		
		$setUser = array('firstname' => $p['fname'],
				'lastname' => $p['lname'],
				'gender' => $p['sex'],
				'email' => $p['email'],
				'date_update' => date('Y-m-d H:i:s')				
				);
		
		$this->db->where('su_id',$key);
		$excUp = $this->db->update('sys_users',$setUser);
		
		if($excUp){ return TRUE; }else{ return FALSE; }


		
	}	
	

    public function changePassword($key,$p){
		
        $this->db->where('su_id', $key);
        $this->db->where('password', base64_encode(trim($p['oldPwd'])));
        $query = $this->db->get('sys_users');
		
        if($query->num_rows()==1){
			
            $data = array('password' => base64_encode(trim($p['newPwd'])),
						'date_update' => date('Y-m-d H:i:s')
			); 
            $this->db->where('su_id', $key);
            
			$query = $this->db->update('sys_users', $data); 
			
            if($query) {
				
                return TRUE;
            } else {
				
                return FALSE;
            }
        } else {
			
            return FALSE;// data not found
        }   
    }

    public function sendEmail($mailData){
 		


       	$this->load->library('email');

		$config['charset']='utf-8';
		$config['newline']="\r\n";
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from('issue@tbkk.co.th', 'issue_system');
		$this->email->to('wisit_t@tbkk.co.th');
		// $this->email->cc('saranee@tbkk.co.th');
		$this->email->subject('test new system email');
		$this->email->message('test new system email krab');
		$this->email->send();

        // ส่งจากอีเมล - ชื่อ
//         $this->email->from($mailData['mail_email'],$mailData['mail_name']); 
//         $this->email->to('wisit_t@tbkk.co.th','wisit_t'); // ส่งถึง
         
//         // หากต้องการส่งแบบให้มี cc หรือ bcc กำหนดตามด้านล่าง
// //        $this->email->cc('another@another-example.com');
// //        $this->email->bcc('them@their-example.com');        
         
//         // หากต้องการแนบไฟล์ กำหนดตามนี้
// //        $this->email->attach('/path/to/photo1.jpg');
// //        $this->email->attach('/path/to/photo2.jpg');
// //        $this->email->attach('/path/to/photo3.jpg');        
//         // หรือ แนบไฟล์แบบให้แสดงในอีเมลเลย เหมาะกับรูป
// //        $this->email->attach('image.jpg', 'inline');
//         // หรือ แนบไฟล์แบบกำหนด url เข้าไปตรงๆ เลย
// //        $this->email->attach('http://www.ninenik.com/filename.pdf');
//         // หรือแบบอัพโหลดไฟล์
// //        $this->email->attach($buffer, 'attachment', 'report.pdf', 'application/pdf');
 		
//         $this->email->subject($mailData['mail_title']); // หัวข้อที่ส่ง
//         $this->email->message($mailData['mail_detail']);  // รายละเอียด
//         return $this->email->send();   // คืนค่าการทำงานว่าเป็น true หรือ false      
         
    }
	

}
 
?>
