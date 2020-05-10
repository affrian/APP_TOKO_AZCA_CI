<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function index()
	{
		$data['page']='satuan';
		$this->load->view('home', $data);
	}

}

/* End of file Satuan.php */
/* Location: ./application/controllers/Satuan.php */