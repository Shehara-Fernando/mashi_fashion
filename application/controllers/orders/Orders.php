<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('orders/order');
		$this->load->view('footer');
	}
}
