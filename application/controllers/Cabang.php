<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

	public function index()
	{
		$data['page']='cabang';
		$this->load->view('vhome', $data);		
	}

}

/* End of file Cabang.php */
/* Location: ./application/controllers/Cabang.php */