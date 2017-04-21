<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->helper('form');
	}
	 
	public function index()
	{		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hasil = $this->m_user->login($username,$password);
		if($hasil)
		{
			
			$this->session->set_userdata('logged_in'//, 'id' => $hasil->id_user, 'username' => $hasil->username
			);
			$this->load->model('m_cari');
			$hasil['data'] = $this->m_cari->tampil();
			$this->load->view('home', $hasil);
			
		}
		else
		{
			?>
				<script languange = "javascript">
					alert("MAAF ADA KESALAHAN !!!\n\Silahkan Cek Kombinasi Username dan Password Anda");
				</script>
            <?php
        }
        $this->load->view('index');
    }
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */