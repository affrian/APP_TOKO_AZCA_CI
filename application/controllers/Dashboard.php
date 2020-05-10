<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){
		// $data adalah variabel yang akan dkirim ke view,
		//  page adalah array yang akan ditangkap oleh view,
		//  dashboard adalah nama view
		$data['page']='dashboard';
		$this->load->view('home',$data);
	}
}
