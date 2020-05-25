<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		// $data adalah variabel yang akan dkirim ke view,
		//  page adalah array yang akan ditangkap oleh view,
		//  dashboard adalah nama view
		$data['page']='vdashboard';
		$this->load->view('vhome',$data);
	}
}
