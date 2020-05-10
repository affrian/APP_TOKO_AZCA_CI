<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$data['page']='barang';
		$this->load->view('home', $data);
	}

}

/* End of file Barang.hp */
/* Location: ./application/controllers/Barang.hp */