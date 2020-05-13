<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inventory/item');
		$this->load->view('footer');
	}

	public function  add_item(){
		$this->form_validation->set_rules('item_code', 'Item Code', 'required');
		$this->form_validation->set_rules('cat_id', 'Item Category', 'required');
		$this->form_validation->set_rules('type_id', 'Item Type', 'required');
		$this->form_validation->set_rules('item_name', 'Item Name', 'required|alpha');
		$this->form_validation->set_rules('item_price', 'Item Price',  'required');
		$this->form_validation->set_rules('quantity', 'Quantity',  'required|max_length[20]');
		$this->form_validation->set_rules('item_image', 'Item Image',  'required');


		$items = array(
		"item_code" => $this->input->post('item_code'),
		"cat_id" => $this->input->post('cat_id'),
		"type_id" => $this->input->post('type_id'),
		"item_name" => $this->input->post('item_name'),
		"item_price" => $this->input->post('item_price'),
		"quantity" => $this->input->post('quantity') ,
		"ii_name" => $this->input->post('item_image')


		);
		var_dump($items);

	}




}

