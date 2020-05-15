<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreatePurchases extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('purchaseorders/createpo');
		$this->load->view('footer');
	}

	public function add_purchases(){
		$purchases = array(


		);

	}
}
