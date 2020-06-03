<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreatePurchases extends CI_Controller {
	public  function  __construct()
	{
		parent::__construct();
		$this->load->model('ItemsModel');
		$this->load->model('CategoriesModel');
		$this->load->model('SuppliersModel');
		$this->load->model('Unitsmeasuremodel');
	}


	public function index()
	{
		$data = array(
			"suppliers" => $this->SuppliersModel->select(),

		);

		$this->load->view('header');
		$this->load->view('purchaseorders/createpo',$data);
		$this->load->view('footer');
	}

	public function add_purchases(){
		$purchases = array(


		);

	}
}
