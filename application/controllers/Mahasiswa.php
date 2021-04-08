<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('mahasiswa/index');
	}

	public function kehadiran(){
		$this->load->view('mahasiswa/kehadiran');
	}

    public function jadwal(){
        $this->load->view('mahasiswa/jadwal');
    }

    public function keuangan(){
        $this->load->view('mahasiswa/keuangan');
    }
}
