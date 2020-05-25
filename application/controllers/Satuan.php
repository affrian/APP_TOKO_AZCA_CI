<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_satuan');
	}

	public function index(){
		$data['page']='vsatuan';
		$this->load->view('vhome', $data);	
	}

	public function insert(){
		$data = [
			'stn_id'=>'',
		    'stn_nama' =>$this->input->post('stn_nama'),
		    'stn_ket' =>$this->input->post('stn_ket')
		];
		$data=$this->m_satuan->insert($data);
		echo json_encode($data);
	}

	public function view(){
		$data['satuan']=$this->m_satuan->getAll();
		$this->load->view('vsatuan',$data);
		// echo json_encode($data);
	}

	 public function ajax_list(){
        $list = $this->m_satuan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $satuan) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $satuan->stn_nama;
            $row[] = $satuan->stn_ket;
			$row[] = '<a href="javascript:void(0)"  name="delete" onclick="stn_delete('.$satuan->stn_id.')"  id="'.$satuan->stn_id.'" class=" btn btn-danger btn-xs update"> <i class="fas fa-window-close"></i></a>
					<a href="javascript:void(0)" name="edit" onclick="stn_edit('.$satuan->stn_id.')"  id="'.$satuan->stn_id.'" class="btn btn-primary" ><i class="fas fa-edit"></i></a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->m_satuan->count_all(),
                        "recordsFiltered" => $this->m_satuan->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function stn_delete($stn_id){
    	$this->m_satuan->delete($stn_id);
    	echo json_encode(array('status'=>TRUE));
	}

	public function update_view($stn_id){
		$getById=$this->m_satuan->getById($stn_id);
		echo json_encode($getById);
	}
	
	public function update(){
		$stn_id=$this->input->post('stn_id_edit');
		$data=[
			"stn_nama"=>$this->input->post('stn_nama_edit'),
			"stn_ket"=>$this->input->post('stn_ket_edit')
		];

		$update=$this->m_satuan->update($data,$stn_id);
		echo json_encode($update);
	}




}




/* End of file Satuan.php */
/* Location: ./application/controllers/Satuan.php */