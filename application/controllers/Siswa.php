<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        
        $this->load->model("mahasiswa_model");
        $data['hasil'] = $this->mahasiswa_model->getAll();
        $this->load->view("mahasiswa/index", $data);
    }

    public function add()
    {
        
        $siswa = $this->load->model("mahasiswa_model");
        
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());
        if ($validation->run()) {
            $siswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("mahasiswa/add");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('/siswa');
       
        $siswa = $this->siswa;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswa"] = $product->getById($id);
        if (!$data["siswa"]) show_404();
        
        $this->load->view("mahasiswa/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->siswa->delete($id)) {
            redirect(site_url('/siswa'));
        }
    }
}