<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class twit extends CI_Controller {

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
		$this->load->model('m_twit');
		$this->load->helper('form');
	}
	 
	public function index()
	{
		/*$jalur['data'] = $this->m_twit->get_jalur();
		$this->load->view('twit', $jalur);
	}
	
	public function add(){*/
		$twit = $this->m_twit->pesan();
        if ($twit == true) {
            ?>
            <script languange = "javascript">
                alert("twit Telah Berhasil!");
            </script>
            <?php

        }
		$this->load->model('m_cari');
			$hasil['data'] = $this->m_cari->tampil();
			$this->load->view('home', $hasil);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */