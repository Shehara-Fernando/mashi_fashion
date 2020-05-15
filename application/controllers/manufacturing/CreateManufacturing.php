<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateManufacturing extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('manufacturing/createmo');
		$this->load->view('footer');
	}
	public function add_mo(){
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('mcat_id', 'Material Category', 'required');
		$this->form_validation->set_rules('mtype_id', 'Material Type', 'required');
		$this->form_validation->set_rules('quantity', 'Quantity',  'required|max_length[20]');
		$this->form_validation->set_rules('unit_price', 'Unit Price', 'required');
		$this->form_validation->set_rules('total_price', 'Total Price', 'required');

		$mo = array(
			"date" => $this->input->post('date'),
			"mcat_id" => $this->input->post('mcat_id'),
			"mtype_id" => $this->input->post('mtype_id'),
			"quantity" => $this->input->post('quantity'),
			"unit_price" => $this->input->post('unit_price'),
			"total_price" => $this->input->post('total_price'),


		);
		$result = $this->ManufacturingModel->create($mo);
		if ($result == true){
			redirect('manufacturing/Manufacturing');

		}

	}



}

