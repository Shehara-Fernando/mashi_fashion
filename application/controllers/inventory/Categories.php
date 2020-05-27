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
	public  function add_category()
	{
		$category = array(
			"name"    => $this->input->post('name'),
			"is_sell" => $this->input->post('is_sell'),

		);

		// to get the result
		$result = $this->CategoriesModel->create($category);
		if ($result == true){
			redirect('inventory/Categories');

		}

	}




}

