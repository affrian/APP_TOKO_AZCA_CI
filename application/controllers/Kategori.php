<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
	}

	public function index()
	{
		$data['page']='kategori';
		$this->load->view('home', $data);		
	}

	public function cktg_insert(){
		$data = [
			'ktg_id'=>'',
		    'ktg_nama' =>$this->input->post('ktg_nama'),
		    'ktg_ket' =>$this->input->post('ktg_ket')

		];

		$data=$this->m_kategori->mktg_insert($data);
		echo json_encode($data);
	}

	// public function cktg_select(){
	// 	$data=$this->m_kategori->mktg_select();
	// 	echo json_encode($data);
	// }

	 public function ajax_list()
    {
        $list = $this->m_kategori->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $kategori) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $kategori->ktg_nama;
            $row[] = $kategori->ktg_ket;
            $row[] = '<a href="javascript:void(0)"  name="delete" onclick="ktg_delete('.$kategori->ktg_id.')"  id="'.$kategori->ktg_id.'" class=" btn btn-danger btn-xs update"> Delete </a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_kategori->count_all(),
                        "recordsFiltered" => $this->m_kategori->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function ktg_delete($ktg_id){
    	$this->m_kategori->ktg_delete_by($ktg_id);
    	echo json_encode(array('status'=>TRUE));
    }



}




/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */