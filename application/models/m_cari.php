<?php
class m_cari extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	function tampil(){
			
			$select = $this->db->query("SELECT * FROM twit, user where BINARY twit.id_user = user.id_user");
			return $select->result();
	}
		
   }
?>