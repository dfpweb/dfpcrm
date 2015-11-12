<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {


	public function index()
	{
		$this->load->view('front_message');
	}

	public function manipolo() {

		echo json_encode(array('msg'=>'CIAO'));
	}
}
