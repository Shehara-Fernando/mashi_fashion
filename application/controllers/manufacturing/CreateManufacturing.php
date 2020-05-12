<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateManufacturing extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('manufacturing/createmo');
		$this->load->view('footer');
	}



}

