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

