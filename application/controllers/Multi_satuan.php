<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi_satuan extends CI_Controller {

	public function index()
	{
		$data['page']='multi_satuan';
		$this->load->view('vhome',$data);

	}

}

/* End of file Multi_satuan.php */
/* Location: ./application/controllers/Multi_satuan.php */