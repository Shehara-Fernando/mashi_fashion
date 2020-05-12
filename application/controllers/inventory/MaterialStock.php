<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialStock extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/materialstock');
		$this->load->view('footer');
	}



}

