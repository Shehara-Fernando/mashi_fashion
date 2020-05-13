<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('suppliers/suppliers');
		$this->load->view('footer');
	}
	public  function  add_supplier(){
		$this->form_validation->set_rules('sup_name', 'Supplier Name', 'required|trim');
		$this->form_validation->set_rules('sup_email', 'Supplier Email', 'required|valid_email');
		$this->form_validation->set_rules('sup_tel', 'Telephone Number', 'required|max_length[10]');
		$this->form_validation->set_rules('sup_address', 'Address', 'required|trim');
		$this->form_validation->set_rules('pro_id', 'Province', 'required');
		$this->form_validation->set_rules('city_id', 'City', 'required');
		$this->form_validation->set_rules('country_id', 'Country', 'required');

	}
}
