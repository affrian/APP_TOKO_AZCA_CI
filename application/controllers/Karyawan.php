<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function index()
	{
		$data['page']='karyawan';
		$this->load->view('home', $data);		
	}

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */