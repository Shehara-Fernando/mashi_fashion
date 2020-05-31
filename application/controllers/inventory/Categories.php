<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	public function __construct() {
		// to load the models inorder to get the data

		parent::__construct();
		$this->load->model('CategoriesModel');

	}

	// to load the view pages
	public function index()
	{
		// array to call the functions
		$data = array(
			"categories"     =>$this->CategoriesModel->select(),

		);

		$this->load->view('header');
		$this->load->view('inventory/productcategories',$data);
		$this->load->view('footer');
	}
	// code to insert data to the database
	public  function add_category()
	{
		$category = array(
			"is_sell" => $this->input->post('is_sell'),
			"code"    => $this->input->post('code'),
			"name"    => $this->input->post('name'),


		);

		// to get the result
		$result = $this->CategoriesModel->create($category);
		if ($result == true){
			redirect('inventory/Categories');

		}

	}




}

