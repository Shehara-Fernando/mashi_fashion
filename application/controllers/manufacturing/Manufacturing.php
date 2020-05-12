<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturing extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('manufacturing/manufacturing');
		$this->load->view('footer');
	}
}

