<?php defined('BASEPATH') OR exit('No direct script access allowed');



class BmiPasien extends CI_Controller {
    
    public function list(){
    $this->load->model('bmipasien_model');// load model
    $data['bmi_pasien']=$this->bmipasien_model->getAll();// query

    $this->load->view('bmi_pasien/list',$data);

    }

    public function view($id){
        $this->load->model('bmipasien_model');
        $data['bmi_pasien']=$this->bmipasien_model->findById($id);
        $this->load->view('bmi_pasien/view',$data);
       }
       
}