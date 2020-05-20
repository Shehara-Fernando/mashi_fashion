<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
	public function __construct() {
		// to load the models inorder to get the data

		parent::__construct();
		$this->load->model('ItemsModel');
		$this->load->model('CategorysModel');
		$this->load->model('TypesModel');
	}

	public function index()
	{
		//array to call the function which is used to get the data from db
		$data = array(
			"items"         =>$this->ItemsModel->select(),
			"categorys"     =>$this->CategorysModel->select(),
			"types"         =>$this->TypesModel->select(),
			"item_categories"=>$this->ItemsModel->get_product_by_category(),

		);
		// load the pages in the view
		$this->load->view('header');
		$this->load->view('inventory/item',$data);
		$this->load->view('footer');
	}

	public function  add_item(){
		//$this->form_validation->set_rules('item_code', 'Item Code', 'required');
		//$this->form_validation->set_rules('cat_id', 'Item Category', 'required');
		//$this->form_validation->set_rules('type_id', 'Item Type', 'required');
		//$this->form_validation->set_rules('item_name', 'Item Name', 'required|alpha');
		//$this->form_validation->set_rules('item_price', 'Item Price',  'required');
		//$this->form_validation->set_rules('quantity', 'Quantity',  'required|max_length[20]');
		//$this->form_validation->set_rules('item_image', 'Item Image',  'required');


<<<<<<< HEAD
		// define upload image configurations
		$config['upload_path'] = 'assets/images/item_images/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1500;
		$config['max_height'] = 1500;

		// load upload library
		$this->load->library('upload', $config);

		// get upload image attributes
		$this->upload->do_upload('item_image');
		$image_data = $this->upload->data();


=======
>>>>>>> origin/development
		// array to get the data in the form to insert the db

		$items = array(
		"code"    => $this->input->post('item_code'),
    "category_id" => $this->input->post('category_id'),
		"type_id" => $this->input->post('type_id'),
		"name"    => $this->input->post('item_name'),
		"price"   => $this->input->post('item_price'),
		"quantity"=> $this->input->post('quantity') ,
<<<<<<< HEAD
	      "image" => $this->input->post('item_image')
=======
	//"ii_name"   => $this->input->post('item_image')
>>>>>>> origin/development

		);
		// to get the result
		$result = $this->ItemsModel->create($items);
		if ($result == true){
			redirect('inventory/Inventory');

		}

	}




}

