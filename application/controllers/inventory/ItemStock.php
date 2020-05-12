<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemStock extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/itemstock');
		$this->load->view('footer');
	}



}

