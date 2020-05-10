<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function index()
	{
		$data['page']='supplier';
		$this->load->view('home', $data);
	}

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */