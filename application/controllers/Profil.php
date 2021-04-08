<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function tentang()
	{
        $this->load->view('includes/header');
		$this->load->view('test');
        $this->load->view('includes/script');
	}


	public function visimisi(){
		$this->load->view('profil/visimisi');
	}

  
}
