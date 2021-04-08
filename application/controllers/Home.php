<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function home()
	{
		$this->load->view('template');
	}


	public function about(){
		$this->load->view('about');
	}

    public function profile(){

    }
}
