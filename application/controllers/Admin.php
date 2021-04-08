<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function home()
	{
		$this->load->view('home');
	}


	public function about(){
		$this->load->view('about');
	}

    public function profile(){

    }
}
