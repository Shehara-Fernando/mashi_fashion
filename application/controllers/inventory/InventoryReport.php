<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventoryReport extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/inventoryreport');
		$this->load->view('footer');
	}



}

