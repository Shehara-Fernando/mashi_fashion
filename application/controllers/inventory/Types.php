<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Types extends CI_Controller {
	// to load the modules of the db
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('CategoriesModel');
		$this->load->model('TypesModel');
	}
	// to load the pages
	public function index()
	{
		// array to call the functions
		$data = array(
			"categories"     =>$this->CategoriesModel->select(),
			"types" =>$this->TypesModel->select(),



		);
		$this->load->view('header');
		$this->load->view('inventory/producttypes',$data);
		$this->load->view('footer');
	}
	// function to insert data from the form to the db
	public  function  add_type(){
		$types = array(
			"name"    => $this->input->post('name'),
			"category_id"   => $this->input->post('category_id'),
			"is_sell"=> $this->input->post('is_sell') ,

		);

		// to get the result
		$result = $this->TypesModel->create($types);
		if ($result == true){
			redirect('inventory/Types');

		}
	}






}

