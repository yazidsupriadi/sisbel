<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Pasien extends CI_Controller {
    public function list(){
    $this->load->model('pasien_model');// load model
    $data['pasien']=$this->pasien_model->getAll();// query

    $this->load->view('pasien/list',$data);

    }

    public function view($id){
        $this->load->model('pasien_model');
        $data['pasien']=$this->pasien_model->findById($id);
        $this->load->view('pasien/view',$data);
       }

    function hapus($id){
        
        $this->load->model('pasien_model');
		$where = array('id' => $id);
		$this->pasien_model->hapus_data($where,'pasien');
		redirect('pasien/list');
	}
    
       
}