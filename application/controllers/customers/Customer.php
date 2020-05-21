<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	// to load to the models into the constructor
	public function __construct() {

		parent::__construct();
		$this->load->model('CustomersModel');
		$this->load->model('DistrictModel');
		$this->load->model('ProvinceModel');


	}


// to call the functions in the model
	public function index() {

		$data = array(

			"customers"=> $this->CustomersModel->select(),
			"districts"=> $this->DistrictModel->select(),
			"provinces"=> $this->ProvinceModel->select(),

		);

		$this->load->view('header');
		$this->load->view('customers/customers',$data);
		$this->load->view('footer');
	}


// function to pass data in the form inorder to add to  db
	public function add_customer(){

		$customers = array(
			"first_name" => $this->input->post('cus_fname'),
			"last_name"  => $this->input->post('cus_lname'),
			// "address1"=> $this->input->post('cus_address1'),
			//"address2" => $this->input->post('cus_address2'),
		   "provinces_id"=> $this->input->post('province_id'),
	       "districts_id"=> $this->input->post('district_id'),
	        "city_id"    => $this->input->post('city_id'),
	  "telephone_number" => $this->input->post('cus_tel'),
			"email"      => $this->input->post('cus_email'),
			"nic"        => $this->input->post('cus_nic'),
			"gender"     => $this->input->post('cus_gender'),



		);
		// to get the result
		$result = $this->CustomersModel->create($customers);
		if ($result == true){
			redirect('customers/Customer');

		}
	}
}
