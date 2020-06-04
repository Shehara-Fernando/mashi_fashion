<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateOrders extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->model('CustomersModel');


	}

	public function index()
	{
		$data = array(
			"customers"=> $this->CustomersModel->select(),
		);
		$this->load->view('header');
		$this->load->view('orders/createorder',$data);
		$this->load->view('footer');
	}
}
