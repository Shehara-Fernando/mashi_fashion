<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/material');
		$this->load->view('footer');
	}



}

