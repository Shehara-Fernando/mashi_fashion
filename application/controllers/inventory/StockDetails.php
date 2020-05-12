<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockDetails extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/stockdetails');
		$this->load->view('footer');
	}



}

