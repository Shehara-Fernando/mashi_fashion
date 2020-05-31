<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
	public function __construct() {
		// to load the models inorder to get the data

		parent::__construct();
		$this->load->model('ItemsModel');
		$this->load->model('CategoriesModel');
		$this->load->model('TypesModel');
		$this->load->model('Unitsmeasuremodel');
	}

	public function index()
	{
		//array to call the function which is used to get the data from db
		$data = array(
			"items"         =>$this->ItemsModel->select(),
			"categorys"     =>$this->CategoriesModel->select(),
			"types"         =>$this->TypesModel->select(),
			"units"     =>$this->Unitsmeasuremodel->select(),


		);
		// load the pages in the view
		$this->load->view('header');
		$this->load->view('inventory/item',$data);
		$this->load->view('footer');
	}

	public function add_item(){
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

		// array to get the data in the form to insert the db
		$items = array(
			"is_sell" => $this->input->post('is_sell'),
			"category_id" => $this->input->post('category_id'),
			"type_id" => $this->input->post('type_id'),
			"name"    => $this->input->post('name'),
			"price"   => $this->input->post('price'),
			"quantity"=> $this->input->post('quantity') ,
			"units_id"=> $this->input->post('units_id') ,
			"image"   => $image_data['file_name'],
		);
		if ($this->ItemsModel->generate_code($this->input->post('category_id')))
		{
			$result = $this->ItemsModel->generate_code($this->input->post('category_id'));
			$items['code'] = $result[0]->categories +  $result[0]->code + 1;
		}else{
			$items['code'] = 1;
		}



		// to get the result
		$result = $this->ItemsModel->create($items);
		if ($result == true){
			redirect('inventory/Inventory');

		}
	}
	// to get the data inorder to load the javascript function
	public  function get_categories(){
		$is_sell =$this->input->post('is_sell');
		$result = $this->CategoriesModel->get_categories($is_sell);
		if ($result)
		{
			echo json_encode($result);
		}
	}
	public  function get_types(){
		$is_sell =$this->input->post('is_sell');
		$result = $this->TypesModel->get_types($is_sell);
		if ($result)
		{
			echo json_encode($result);
		}
	}
	public  function  generate_code(){
		$category_id =$this->input->post('category_id');
		$result = $this->ItemsModel->generate_code($category_id);
		if ($result)
		{
			echo  json_encode($result[0]->code + 1);

		}
		else {
			echo json_encode(1);
		}

	}
}

