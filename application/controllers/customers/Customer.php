<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	// to load to the models into the constructor
	public function __construct() {

		parent::__construct();
		$this->load->model('CustomersModel');
		$this->load->model('DistrictModel');
		$this->load->model('ProvinceModel');
		$this->load->model('CityModel');

	}


// to call the functions in the model
	public function index() {

		$data = array(
			"customers"=> $this->CustomersModel->select(),
			"districts"=> $this->DistrictModel->select(),
			"provinces"=> $this->ProvinceModel->select(),
			"cities"  => $this->CityModel->select(),

		);

		$this->load->view('header');
		$this->load->view('customers/customers',$data);
		$this->load->view('footer');
	}


// function to pass data in the form inorder to add to  db
	public function add_customer(){

		$customers = array(
			"first_name" => $this->input->post('first_name'),
			"last_name"  => $this->input->post('last_name'),
			"email"      => $this->input->post('email'),
			"nic"        => $this->input->post('nic'),
			"telephone_number" => $this->input->post('telephone'),
			"address"=> $this->input->post('address'),
			"address_two" => $this->input->post('address_two'),
			"provinces_id"=> $this->input->post('province_id'),
			"districts_id"=> $this->input->post('district_id'),
			"city_id"    => $this->input->post('city_id'),
			"gender"     => $this->input->post('gender'),
		);

		// to get the result
		$result = $this->CustomersModel->create($customers);
		if ($result == true){
			redirect('customers/Customer');

		}
	}
	// to get the data inorder to load the javascript function
	public  function get_province(){
		$district_id =$this->input->post('district_id');
		$result = $this->ProvinceModel->get_province($district_id);
		if ($result)
		{
			echo json_encode($result);
		}
	}
	public  function  get_postcode(){
		$city_id =$this->input->post('city_id');
		$result = $this->CityModel->generate_postcode($city_id);

		if ($result)
		{
			echo json_encode($result);

		}


	}
}
