<?php
class m_twit extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	function pesan(){
		$id_user = 11;
		$twit = $this->input->post('twit');
        $this->db->query("INSERT INTO twit values ('','$id_user', '$twit')");
        $select = $this->db->query("SELECT * FROM twit, user where BINARY twit.id_user = user.id_user");
        return $select->result();
    }
   }
?>