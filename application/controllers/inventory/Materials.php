<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller {
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('MaterialsModel');
		$this->load->model('MaterialCategoryModel');
		$this->load->model('MaterialTypeModel');
	}

	public function index()
	{
		$data = array(
			'materials' => $this->MaterialsModel->select(),
			"categories" => $this->MaterialCategoryModel->select(),
			"types" => $this->MaterialTypeModel->select(),
		);
		$this->load->view('header');
		$this->load->view('inventory/material',$data);
		$this->load->view('footer');
	}

	public function add_materials()
	{
		//$this->form_validation->set_rules('mat_code', 'Material Code', 'required');
		//$this->form_validation->set_rules('mcat_id', 'Material Category', 'required');
		//$this->form_validation->set_rules('mtype_id', 'Material Type', 'required');
		//$this->form_validation->set_rules('mat_name', 'Material Name', 'required|alpha');
		//$this->form_validation->set_rules('quantity', 'Quantity',  'required|max_length[20]');
		//$this->form_validation->set_rules('mat_image', 'Material Image',  'required');


		$materialdata = array(
			"code" => $this->input->post('mat_code'),
			"mcat_id" => $this->input->post('mcat_id'),
			"mtype_id" => $this->input->post('mtype_id'),
			"name" => $this->input->post('mat_name'),
			"quantity" => $this->input->post('quantity')

		);
		$result = $this->MaterialsModel->create($materialdata);
		if ($result == true) {
			redirect('inventory/Materials');


		}


	}
}

