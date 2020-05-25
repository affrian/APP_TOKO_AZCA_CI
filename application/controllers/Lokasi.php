<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function index()
	{
		$data['page']='vlokasi';
		$this->load->view('vhome', $data);
	}

}

/* End of file Lokasi_brg.php */
/* Location: ./application/controllers/Lokasi_brg.php */