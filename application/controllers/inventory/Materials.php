<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/material');
		$this->load->view('footer');
	}

	public function add_materials(){
		$this->form_validation->set_rules('mat_code', 'Material Code', 'required');
		$this->form_validation->set_rules('mcat_id', 'Material Category', 'required');
		$this->form_validation->set_rules('mtype_id', 'Material Type', 'required');
		$this->form_validation->set_rules('mat_name', 'Material Name', 'required|alpha');
		$this->form_validation->set_rules('quantity', 'Quantity',  'required|max_length[20]');
		$this->form_validation->set_rules('mat_image', 'Material Image',  'required');





	}



}

