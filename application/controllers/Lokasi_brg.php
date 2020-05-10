<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_brg extends CI_Controller {

	public function index()
	{
		$data['page']='lokasi_brg';
		$this->load->view('home', $data);
	}

}

/* End of file Lokasi_brg.php */
/* Location: ./application/controllers/Lokasi_brg.php */