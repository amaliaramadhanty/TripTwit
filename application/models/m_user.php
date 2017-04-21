<?php
class m_user extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	 function login($username, $password)
 		{
			$pass = MD5($password);
 			$query = $this->db->query("SELECT * FROM user WHERE BINARY USERNAME = '$username' AND BINARY PASSWORD = '$pass'");
     		return $query->result();
 		}		
	
	function profil(){
		$this -> db -> select('*');
   		$this -> db -> from('user');
   		$this -> db -> where('id_user', 11);
 		$query = $this -> db -> get();
     	return $query->result();
	}
		
}
?>