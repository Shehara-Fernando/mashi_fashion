<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialStockDetails extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/materialstockdetails');
		$this->load->view('footer');
	}



}

